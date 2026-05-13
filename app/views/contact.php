<?php
$pageTitle = 'Contact - Fort Energy';
$activePage   = 'contact';
$metaDesc     = 'PLACEHOLDER — SEO to supply';
$canonicalUrl = 'https://fortenergy.co.uk/contact';
$pageCSS      = 'contact.css';
$schemaJson   = null; // no schema needed on contact page
ob_start();

?>
<div class="container">
    <h1>Contact</h1>
    <p>Conversion + proof. Submit enquiry.</p>
</div>
<?php
$content = ob_get_clean();
require __DIR__ . '/layouts/main.php';
?>