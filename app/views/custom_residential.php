<?php
$pageTitle = 'Custom Residential - Fort Energy';
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
