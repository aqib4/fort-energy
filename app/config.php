<?php
/**
 * Configuration file for Fort Energy
 */

// Define the base path for URL rewriting and asset loading
$uri = $_SERVER['REQUEST_URI'];
if ($_SERVER['HTTP_HOST'] === 'localhost' || $_SERVER['SERVER_ADDR'] === '127.0.0.1') {
    define('BASE_PATH', '/fort-energy/public');
} elseif (strpos($uri, '/staging/public') === 0) {
    define('BASE_PATH', '/staging/public');
} elseif (strpos($uri, '/staging') === 0) {
    define('BASE_PATH', '/staging');
} else {
    define('BASE_PATH', '');
}

// Full base URL (including trailing slash)
define('BASE_URL', BASE_PATH . '/');

// Global Contact Details
define('CONTACT_EMAIL', 'muhammadaqibkhan001@gmail.com');
define('CONTACT_PHONE', '01670 898220');
define('CONTACT_PHONE_TEL', '+441670898220');

// Google reCAPTCHA v2 Configuration
// These are Google's official public test keys which always pass verification and work on localhost.
// Replace these with your real domain-specific keys in production.
define('RECAPTCHA_SITE_KEY', '6LeIxAcTAAAAAJcZVRqyHh71UMIEGNQ_MXjiZKhI');
define('RECAPTCHA_SECRET_KEY', '6LeIxAcTAAAAAGG-vFI1TnRWxMZNFuojJ4WifJWe');

