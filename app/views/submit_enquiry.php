<?php
/**
 * Fort Energy — Secure Contact Form Submission Handler
 * Endpoint: POST /submit-enquiry
 */

header('Content-Type: application/json');

// Ensure database/SMTP configuration is loaded
require_once __DIR__ . '/../config.php';

// Only allow POST requests
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['success' => false, 'error' => 'Invalid request method.']);
    exit;
}

// 1. Honeypot check (spam bots will fill this out, real users won't)
if (!empty($_POST['website'])) {
    // Return a fake success response to trick the bot
    echo json_encode(['success' => true, 'bot' => true]);
    exit;
}

// 2. Server-side Google reCAPTCHA v2 Verification
$recaptchaToken = $_POST['g-recaptcha-response'] ?? '';

if (defined('RECAPTCHA_SECRET_KEY') && !empty(RECAPTCHA_SECRET_KEY)) {
    // If it's a real key (not the public test key) or if we want to run verification
    $verifyUrl = 'https://www.google.com/recaptcha/api/siteverify';
    $postData = [
        'secret'   => RECAPTCHA_SECRET_KEY,
        'response' => $recaptchaToken,
        'remoteip' => $_SERVER['REMOTE_ADDR'] ?? ''
    ];

    $options = [
        'http' => [
            'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
            'method'  => 'POST',
            'content' => http_build_query($postData),
            'timeout' => 5 // 5 second timeout limit
        ]
    ];

    $context = stream_context_create($options);
    $verifyResponse = @file_get_contents($verifyUrl, false, $context);
    $responseKeys = json_decode($verifyResponse, true);

    // Only block if the captcha verification returned an explicit failure
    // Note: Since we are using Google's public test keys on localhost, this will return success = true.
    if (!$responseKeys || !$responseKeys['success']) {
        echo json_encode([
            'success' => false,
            'error'   => 'reCAPTCHA verification failed. Please try again.'
        ]);
        exit;
    }
} else {
    // If no secret key is defined, we require token presence in production
    if (empty($recaptchaToken) && $_SERVER['HTTP_HOST'] !== 'localhost' && $_SERVER['SERVER_ADDR'] !== '127.0.0.1') {
        echo json_encode(['success' => false, 'error' => 'reCAPTCHA verification is missing.']);
        exit;
    }
}

// 3. Collect & validate inputs
$name    = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
$email   = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$phone   = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_SPECIAL_CHARS);
$company = filter_input(INPUT_POST, 'company', FILTER_SANITIZE_SPECIAL_CHARS);
$details = filter_input(INPUT_POST, 'project_details', FILTER_SANITIZE_SPECIAL_CHARS);
$sector  = filter_input(INPUT_POST, 'sector', FILTER_SANITIZE_SPECIAL_CHARS);

if (!$name || !$email || !$details || !$sector) {
    echo json_encode(['success' => false, 'error' => 'Please complete all required fields with valid details.']);
    exit;
}

// Map sector slugs to readable labels
$sectorLabels = [
    'commercial'            => 'Commercial & Industrial',
    'commercial-specialist' => 'Commercial Specialist',
    'development'           => 'Developers & Housebuilders',
    'residential'           => 'Residential Systems',
    'custom-residential'    => 'Custom Residential',
    'agricultural'          => 'Agricultural',
    'bipv'                  => 'Building Integrated Solar (BIPV)',
];
$readableSector = $sectorLabels[$sector] ?? ucfirst($sector);

// 4. Secure File Upload Processing (In-Memory Attachments)
$attachments = [];
$allowedExtensions = ['pdf', 'dwg', 'jpg', 'jpeg', 'png', 'xlsx'];
$maxFileSize = 10 * 1024 * 1024; // 10 Megabytes

if (isset($_FILES['files']) && is_array($_FILES['files']['name'])) {
    $fileCount = count($_FILES['files']['name']);
    
    for ($i = 0; $i < $fileCount; $i++) {
        // Skip if no file was uploaded in this slot
        if ($_FILES['files']['error'][$i] === UPLOAD_ERR_NO_FILE) {
            continue;
        }

        if ($_FILES['files']['error'][$i] !== UPLOAD_ERR_OK) {
            echo json_encode([
                'success' => false,
                'error'   => 'Error uploading file: ' . htmlspecialchars($_FILES['files']['name'][$i])
            ]);
            exit;
        }

        $fileName = $_FILES['files']['name'][$i];
        $fileTmp  = $_FILES['files']['tmp_name'][$i];
        $fileSize = $_FILES['files']['size'][$i];
        
        // Extract extension safely
        $fileExt = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

        // Validate extension
        if (!in_array($fileExt, $allowedExtensions)) {
            echo json_encode([
                'success' => false,
                'error'   => "Invalid file type for '{$fileName}'. Allowed formats: PDF, DWG, JPG, PNG, XLSX."
            ]);
            exit;
        }

        // Validate size
        if ($fileSize > $maxFileSize) {
            echo json_encode([
                'success' => false,
                'error'   => "File '{$fileName}' exceeds the 10 MB size limit."
            ]);
            exit;
        }

        // Read file binary content in memory
        $fileData = @file_get_contents($fileTmp);
        if ($fileData !== false) {
            $attachments[] = [
                'name' => basename($fileName),
                'data' => $fileData
            ];
        }
    }
}

// 5. Construct HTML Email Body
$htmlEmail = "
<html>
<head>
    <style>
        body { font-family: sans-serif; line-height: 1.6; color: #111; }
        .container { max-width: 600px; margin: 0 auto; padding: 20px; border: 1px solid #eee; border-radius: 8px; }
        .header { background: #0A6B52; color: #fff; padding: 15px; border-radius: 6px 6px 0 0; }
        .header h2 { margin: 0; font-size: 20px; }
        .section { padding: 15px 0; border-bottom: 1px solid #eee; }
        .label { font-weight: bold; color: #0A6B52; font-size: 13px; text-transform: uppercase; margin-bottom: 4px; }
        .value { font-size: 15px; margin-bottom: 12px; }
        .footer { font-size: 12px; color: #888; margin-top: 20px; text-align: center; }
    </style>
</head>
<body>
    <div class='container'>
        <div class='header'>
            <h2>New Project Enquiry</h2>
        </div>
        <div class='section'>
            <div class='label'>Sector</div>
            <div class='value'><strong>{$readableSector}</strong></div>
            
            <div class='label'>Name</div>
            <div class='value'>{$name}</div>
            
            <div class='label'>Email Address</div>
            <div class='value'><a href='mailto:{$email}'>{$email}</a></div>
            
            <div class='label'>Phone Number</div>
            <div class='value'>" . ($phone ? $phone : 'Not provided') . "</div>
            
            <div class='label'>Company / Property</div>
            <div class='value'>" . ($company ? $company : 'Not provided') . "</div>
        </div>
        <div class='section'>
            <div class='label'>Project Details</div>
            <div class='value' style='white-space: pre-wrap; background: #f9f9f9; padding: 12px; border-radius: 4px; border: 1px solid #eee;'>{$details}</div>
        </div>
        <div class='section'>
            <div class='label'>Uploaded Attachments</div>
            <div class='value'>" . (count($attachments) > 0 ? count($attachments) . " files attached." : 'No plans/drawings uploaded.') . "</div>
        </div>
        <div class='footer'>
            <p>Submitted via Fort Energy Contact Form on " . date('Y-m-d H:i:s') . "</p>
        </div>
    </div>
</body>
</html>
";

// 6. Assemble MIME E-mail Headers & Content
$to = CONTACT_EMAIL;
$subject = "New Enquiry: [{$readableSector}] - {$name}";
$boundary = md5(uniqid(time()));

// Primary headers
$headers = "From: Fort Energy Website <" . CONTACT_EMAIL . ">\r\n";
$headers .= "Reply-To: {$name} <{$email}>\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: multipart/mixed; boundary=\"{$boundary}\"\r\n";

// E-mail body structure
$message = "--{$boundary}\r\n";
$message .= "Content-Type: text/html; charset=UTF-8\r\n";
$message .= "Content-Transfer-Encoding: 7bit\r\n\r\n";
$message .= $htmlEmail . "\r\n\r\n";

// Add Attachments
foreach ($attachments as $attachment) {
    $encodedData = chunk_split(base64_encode($attachment['data']));
    $message .= "--{$boundary}\r\n";
    $message .= "Content-Type: application/octet-stream; name=\"{$attachment['name']}\"\r\n";
    $message .= "Content-Description: {$attachment['name']}\r\n";
    $message .= "Content-Disposition: attachment; filename=\"{$attachment['name']}\"; size=" . strlen($attachment['data']) . ";\r\n";
    $message .= "Content-Transfer-Encoding: base64\r\n\r\n";
    $message .= $encodedData . "\r\n\r\n";
}

$message .= "--{$boundary}--";

// 7. Deliver E-mail
$mailSent = @mail($to, $subject, $message, $headers);

// 8. Handle fallbacks & responses
if ($mailSent) {
    echo json_encode(['success' => true]);
    exit;
} else {
    // If mail sending failed (very common in local development environments like XAMPP)
    // We log the details locally inside the storage directory so developers can inspect submissions and test layouts
    $logDir = __DIR__ . '/../../storage/logs';
    if (!file_exists($logDir)) {
        @mkdir($logDir, 0755, true);
    }
    
    $logFile = $logDir . '/enquiry_submissions.log';
    $logEntry = "[" . date('Y-m-d H:i:s') . "] ----------------------------------------\n" .
                "TO: {$to}\n" .
                "SUBJECT: {$subject}\n" .
                "REPLY-TO: {$email}\n" .
                "SECTOR: {$readableSector}\n" .
                "NAME: {$name}\n" .
                "PHONE: {$phone}\n" .
                "COMPANY: {$company}\n" .
                "DETAILS:\n{$details}\n" .
                "ATTACHMENTS: " . implode(', ', array_column($attachments, 'name')) . "\n" .
                "------------------------------------------------------------------------\n\n";
                
    @file_put_contents($logFile, $logEntry, FILE_APPEND);

    // If running on localhost/127.0.0.1, we return success so testing continues seamlessly
    $isLocal = ($_SERVER['HTTP_HOST'] === 'localhost' || $_SERVER['SERVER_ADDR'] === '127.0.0.1');
    if ($isLocal) {
        echo json_encode([
            'success' => true, 
            'simulated' => true, 
            'message' => 'Local environment detected. Form processed and logged to storage/logs/enquiry_submissions.log'
        ]);
        exit;
    } else {
        echo json_encode([
            'success' => false, 
            'error' => 'Our mail server is temporarily busy. Please call us directly on ' . CONTACT_PHONE . ' or retry shortly.'
        ]);
        exit;
    }
}
