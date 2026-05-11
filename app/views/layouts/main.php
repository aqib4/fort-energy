<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $pageTitle ?? 'Fort Energy — Energy Systems Designed for Performance' ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=DM+Mono:wght@400;500&family=Fraunces:ital,opsz,wght@0,9..144,300;0,9..144,700;1,9..144,300&family=Syne:wght@400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/index.css">
    <?php if (isset($pageCss)): ?>
        <link rel="stylesheet" href="<?= BASE_URL ?>assets/css/<?= htmlspecialchars($pageCss) ?>.css">
    <?php endif; ?>
</head>

<body>
    <?php require_once __DIR__ . '/../partials/header.php'; ?>

    <main class="main-content">
        <?php echo $content ?? ''; ?>
    </main>

    <?php require_once __DIR__ . '/../partials/footer.php'; ?>
    <script src="<?= BASE_URL ?>assets/js/main.js"></script>
</body>

</html>