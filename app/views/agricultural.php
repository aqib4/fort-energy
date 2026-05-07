<?php
$pageTitle = 'Agricultural - Fort Energy';
ob_start();
?>
<div class="container">
    <h1>Agricultural</h1>
    <p>Roof and ground-mount systems for farms.</p>
</div>
<?php
$content = ob_get_clean();
require __DIR__ . '/layouts/main.php';
?>
