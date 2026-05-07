<?php
$pageTitle = 'Residential Systems - Fort Energy';
ob_start();
?>
<div class="container">
    <h1>Residential Systems</h1>
    <p>Tier-led page with EV, MVHR, hot water integration.</p>
</div>
<?php
$content = ob_get_clean();
require __DIR__ . '/layouts/main.php';
?>