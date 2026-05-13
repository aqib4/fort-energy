<?php
$pageTitle = 'Custom Residential - Fort Energy';
$activePage   = 'residential';
$metaDesc     = 'PLACEHOLDER — SEO to supply';
$canonicalUrl = 'https://fortenergy.co.uk/residential/custom';
$pageCSS      = 'residentials.css';
$schemaJson   = json_encode([
    '@context'        => 'https://schema.org',
    '@type'           => 'BreadcrumbList',
    'itemListElement' => [
        ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home',                'item' => 'https://fortenergy.co.uk'],
        ['@type' => 'ListItem', 'position' => 2, 'name' => 'Residential Systems', 'item' => 'https://fortenergy.co.uk/residential'],
        ['@type' => 'ListItem', 'position' => 3, 'name' => 'Custom Residential',  'item' => 'https://fortenergy.co.uk/residential/custom'],
    ],
]);
ob_start();

?>
<div class="container">
    <h1>Custom Residential</h1>
    <p>High-spec integrated systems with plant room, pool, AC.</p>
</div>
<?php
$content = ob_get_clean();
require __DIR__ . '/layouts/main.php';
?>