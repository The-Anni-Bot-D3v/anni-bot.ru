<?php require_once($_SERVER['DOCUMENT_ROOT'].'/vendor/app/config.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- embed -->
    <meta content="Anni" property="og:title">
    <meta content='https://cdn.discordapp.com/avatars/817889533345136640/5c591bae1a5d7048dfcdb4981310f998.webp?size=1024' property='og:image'>
    <meta content="Бот, для твоего сервер" property="og:description">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/Anni.png">
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/optimization.css">
    <link rel="stylesheet" type="text/css" href="assets/css/fontawesome/css/all.min.css">
    <title><?=$cfg['sitename']?> | <?=HTTP_PAGE_NAME?></title>
</head>
<body>
            <?php require_once($_SERVER['DOCUMENT_ROOT'].'/vendor/common/header.php');?>
            <a href="/invite" target="_blank" class="btn btn-white"><?=$lang['addButton']?></a>
                <img class="Anniavatarhome">
            <div class="animei1"></div>
            <div id="particles"></div>
            <p class="Hometext1"><?=$lang['main1']?></p>
            <p class="Hometext2"><?=$lang['main2']?></p>
            <?php require_once($_SERVER['DOCUMENT_ROOT'].'/vendor/common/footer.php');?>
<script src="assets/js/app.js"></script>
<script src="assets/js/particles.js"></script>
<script src="assets/js/particle.js"></script>
</body>
</html>