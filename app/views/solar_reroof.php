<?php
$pageTitle = 'Solar Reroof - Fort Energy';
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
