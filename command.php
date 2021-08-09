
<?php require_once($_SERVER['DOCUMENT_ROOT'].'/vendor/app/config.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta content="Anni-Command" property="og:title">
    <meta content='https://cdn.discordapp.com/avatars/817889533345136640/5c591bae1a5d7048dfcdb4981310f998.webp?size=1024' property='og:image'>
    <meta content="Мои команды" property="og:description">
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
        
            <!-- Фотки тян -->
            <div class="animec1"></div>
            <div class="animec2"></div>

            <footer class="footer1">
                <hr class="hr2"></hr>
                <div class="copy2">
                    <p>© The<span><a href="https://zullls.ru"> Anni </a></span>Developer</p>
                    <p>Date: <?=date(d.'.'.m.'.'.Y)?></p>
                </div>
                <h4><?=$lang['information']?><h4>
                    <ul>
                        <li><a href="/command"><i class="fas fa-list"></i> <?=$lang['commandFoot']?></a></li>
                        <li><a href="/faq"><i class="fas fa-question-circle"></i> FAQ</a></li>
                    </ul>
            </footer>
            <!-- Команды -->
            <div class="pre-wrapper">
                <div class="content">
                <div class="container">
                <section class="faqs">
                <div class="faq">
                <div class="question">
                <h3><?=$lang['command1']?></h3>
                <div><i class="icon fas fa-chevron-left"></i></div>
                </div>
                <div class="answer">
                <p>
                ⨠ <?=$lang['scroll']?></br>
                ⨠ <?=$lang['allcommnd']?>
                </p>
                </div>
                </div>
                <div class="faq">
                <div class="question">
                <h3><?=$lang['Admincommand']?></h3>
                <div><i class="icon fas fa-chevron-left"></i></div>
                </div>
                <div class="answer">
                <p>
                <?=$lang['admins']?>
                </p>
                </div>
                </div>
                <div class="faq">
                <div class="question">
                <h3><?=$lang['RolePlay']?></h3>
                <div><i class="icon fas fa-chevron-left"></i></div>
                </div>
                <div class="answer">
                <p>
                <?=$lang['rpcommand']?>
                </p>
                </div>
                </div>
                <div class="faq">
                <div class="question">
                <h3><?=$lang['Utilits']?></h3>
                <div><i class="icon fas fa-chevron-left"></i></div>
                </div>
                <div class="answer">
                <p>
                <?=$lang['utilitscomm']?>
                </p>
                </div>
                </div>
                <div class="faq">
                <div class="question">
                <h3><?=$lang['hentai']?></h3>
                <div><i class="icon fas fa-chevron-left"></i></div>
                </div>
                <div class="answer">
                <p>
                <?=$lang['hentaicomm']?>
                </p>
                </div>
                </div>
                <div class="faq">
                <div class="question">
                <h3><?=$lang['Animals']?></h3>
                <div><i class="icon fas fa-chevron-left"></i></div>
                </div>
                <div class="answer">
                <p>
                <?=$lang['animalsdesc']?>
                </p>
                </div>
                </div>
                <div class="faq">
                <div class="question">
                <h3><?=$lang['Read']?></h3>
                <div><i class="icon fas fa-chevron-left"></i></div>
                </div>
                <div class="answer">
                <p>
                <?=$lang['Readdesc']?><a href="https://zullls.ru" class="faq-link">Zullls</a>
                </p>
                </div>
                </div>
                </section>
                </div>
                </div>
                </div>
<script src="assets/js/app.js"></script>
</body>
</html>