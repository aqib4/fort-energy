<?php
$pageTitle = 'Commercial Specialist Services - Fort Energy';
ob_start();
?>
<div class="container">
    <h1>Commercial Specialist Services</h1>
    <p>Power quality, off-grid, temporary, harsh environment, control panels.</p>
</div>
<?php
$content = ob_get_clean();
require __DIR__ . '/layouts/main.php';
?>
