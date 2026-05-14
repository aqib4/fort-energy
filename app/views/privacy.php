<?php
$pageTitle = 'Privacy Policy - Fort Energy';
$activePage   = 'privacy';
$metaDesc     = 'Privacy Policy for Fort Energy. We respect your privacy and protect your personal data.';
$canonicalUrl = 'https://fortenergy.co.uk/privacy';
ob_start();
?>

<!-- BREADCRUMB -->
<nav aria-label="Breadcrumb" class="breadcrumb">
    <a href="<?= BASE_URL ?>" class="bc-item">Home</a>
    <span class="bc-sep" aria-hidden="true">/</span>
    <span class="bc-current" aria-current="page">Privacy Policy</span>
</nav>

<!-- MAIN CONTENT -->
<div class="main-content" style="max-width: 800px; margin: 0 auto; padding: 80px 20px;">
    <h1 class="hero-h1" style="margin-bottom: 40px;">Privacy <em>Policy</em></h1>
    <div style="font-size: 16px; color: var(--ink-mid); line-height: 1.8;">
        <p style="margin-bottom: 24px;">At Fort Energy, we are committed to protecting and respecting your privacy. This policy explains when and why we collect personal information about people who visit our website, how we use it, the conditions under which we may disclose it to others and how we keep it secure.</p>
        
        <h2 style="font-family: var(--display); font-size: 24px; color: var(--ink); margin-bottom: 16px;">How do we collect information from you?</h2>
        <p style="margin-bottom: 24px;">We obtain information about you when you use our website, for example, when you contact us about products and services.</p>

        <h2 style="font-family: var(--display); font-size: 24px; color: var(--ink); margin-bottom: 16px;">What type of information is collected from you?</h2>
        <p style="margin-bottom: 24px;">The personal information we collect might include your name, address, email address, IP address, and information regarding what pages are accessed and when.</p>

        <h2 style="font-family: var(--display); font-size: 24px; color: var(--ink); margin-bottom: 16px;">How is your information used?</h2>
        <p style="margin-bottom: 24px;">We may use your information to:
            <ul style="margin-left: 20px; margin-bottom: 24px;">
                <li>Process orders that you have submitted;</li>
                <li>To carry out our obligations arising from any contracts entered into by you and us;</li>
                <li>Seek your views or comments on the services we provide;</li>
                <li>Notify you of changes to our services;</li>
                <li>Send you communications which you have requested and that may be of interest to you.</li>
            </ul>
        </p>

        <p style="margin-top: 40px; font-size: 14px; color: var(--ink-low);">This is a placeholder policy. You should replace this with your actual legal documentation.</p>
    </div>
</div>

<?php
$content = ob_get_clean();
require __DIR__ . '/layouts/main.php';
?>
