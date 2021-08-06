<?php require_once($_SERVER['DOCUMENT_ROOT'].'/vendor/app/config.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
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
    <div id="particles"></div>
    <div class="animef1"></div>
            
            <a class="developer"><?=$lang['developertext']?></a>

            <!-- ZULLLS SECTION -->
            <?php
            
            $userid = "665831333708300318";
            $zullls = file_get_contents('https://api.void.cf/discord?type=user&id='.$userid);
            $zulllsAva = json_decode($zullls, true);
            
            ?>
            <div class="zulllsavatar"><img width="100%" src="<?=$zulllsAva['data']['avatarURL']?>" alt=""></div>
            <a class="developer1"><?=$zulllsAva['data']['username']?>#<?=$zulllsAva['data']['discriminator']?></a>
            <a class="developer1t"><?=$lang['Developer']?></a>


            <!-- Fruitella SECTION -->
            <?php
            
            $userid = "390128735883624468";
            $Fruitella = file_get_contents('https://api.void.cf/discord?type=user&id='.$userid);
            $FruitellaAva = json_decode($Fruitella, true);
            
            ?>
            <div class="fruitellaavatar"><img width="100%" src="<?=$FruitellaAva['data']['avatarURL']?>" alt=""></div>
            <a class="developer2"><?=$FruitellaAva['data']['username']?>#<?=$FruitellaAva['data']['discriminator']?></a>
            <a class="developer2t"><?=$lang['FrutDesc']?></a>    

            <?php require_once($_SERVER['DOCUMENT_ROOT'].'/vendor/common/footer.php');?>
<script src="assets/js/particles.js"></script>
<script src="assets/js/particle.js"></script>
</body>
</html>