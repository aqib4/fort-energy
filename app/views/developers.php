<?php
$pageTitle = 'Developers & Housebuilders - Fort Energy';
ob_start();
?>
<div class="container">
    <h1>Developers & Housebuilders</h1>
    <p>Energy strategy + on-site training for in-roof / BIPV.</p>
</div>
<?php
$content = ob_get_clean();
require __DIR__ . '/layouts/main.php';
?>
