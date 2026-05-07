<?php
$pageTitle = 'Contact - Fort Energy';
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
