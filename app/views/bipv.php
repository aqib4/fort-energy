<?php
$pageTitle = 'Building Integrated Solar - Fort Energy';
ob_start();
?>
<div class="container">
    <h1>Building Integrated Solar</h1>
    <p>Specifier-led BIPV product showcase.</p>
</div>
<?php
$content = ob_get_clean();
require __DIR__ . '/layouts/main.php';
?>
