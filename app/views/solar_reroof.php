<?php
$pageTitle = 'Solar Reroof - Fort Energy';
$activePage   = 'residential';
$metaDesc     = 'PLACEHOLDER — SEO to supply';
$canonicalUrl = 'https://fortenergy.co.uk/residential/solar-reroof';
$pageCSS      = 'residentials.css';
$schemaJson   = json_encode([
    '@context'        => 'https://schema.org',
    '@type'           => 'BreadcrumbList',
    'itemListElement' => [
        ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home',                'item' => 'https://fortenergy.co.uk'],
        ['@type' => 'ListItem', 'position' => 2, 'name' => 'Residential Systems', 'item' => 'https://fortenergy.co.uk/residential'],
        ['@type' => 'ListItem', 'position' => 3, 'name' => 'Solar Reroof',        'item' => 'https://fortenergy.co.uk/residential/solar-reroof'],
    ],
]);
ob_start();
?>
<div class="container">
    <h1>Solar Reroof</h1>
    <p>ROI-led page for properties due for reroofing.</p>
</div>


<?php
$content = ob_get_clean();
require __DIR__ . '/layouts/main.php';
?>