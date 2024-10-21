<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= isset($page) ? $page : '' ?><?= TEXT_SITE_NAME ?></title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Modak&display=swap" rel="stylesheet">
</head>
<body>
<?php include_once VIEWS_COMMON_DIR . 'header.php'?>
<main>
    <?php include_once VIEWS_PAGES_DIR . $page . '.php'?>
</main>
<?php include_once VIEWS_COMMON_DIR . 'footer.php'?>
</body>
</html>