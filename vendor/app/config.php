<?php

    session_start();

$cfg = [
    "sitename" => "Anni"
];

// Language system
if(!$_SESSION['lang']){
    $_SESSION['lang'] = 'ru';
}

if($_GET['func'] == 'exit'){
    unset($_SESSION['lang']);
}

if($_GET['lang'] == 'ru'){
    unset($_SESSION['lang']);
    $_SESSION['lang'] = 'ru';
    if($_SERVER['REQUEST_URI'] == '/command?lang=ru'){
        header('Location: /command');
        exit();
    } elseif($_SERVER['REQUEST_URI'] == '/faq?lang=ru'){
        header('Location: /faq');
        exit();
    }
    header('Location: /');
}

if($_GET['lang'] == 'en'){
    unset($_SESSION['lang']);
    $_SESSION['lang'] = 'en';
    if($_SERVER['REQUEST_URI'] == '/command?lang=en'){
        header('Location: /command');
        exit();
    } elseif($_SERVER['REQUEST_URI'] == '/faq?lang=en'){
        header('Location: /faq');
        exit();
    }
    header('Location: /');
}

if($_SESSION['lang'] == 'ru'){
    $getLangSys = [];
    
    $lang = [
        // Home
        "homebtn" => "Главная",
        "commandsbtn" => "Команды",
        "main1" => "Я идеальная💜 для вашего сервера!",
        "main2" => "Ты можешь пригласить меня на</br> сервер, а так же зайти на сапорт сервер,</br>где Zullls посторается тебе помочь.</br>Мои префиксы: anni, Anni, a!",
        "addButton" => "Добавить бота",
        // Command
        "command1" => "Что есть в боте?",
        "scroll" => "Ролеплей, модерация, утилиты!",

        "allcommnd" => "В общем: 40 комманд!",
        "Admincommand" => "Админ комманды",
        "admins" => "⨠ a!ban @пользователь причина - бан пользователя на сервере</br>
        ⨠ a!kick @пользователь причина - кик пользователя с сервера</br>
        ⨠ a!clear с 1 до 50 - очистка чата</br>",
        
        "RolePlay" => "Ролеплей",
        "rpcommand" => "⨠ a!hug @user - обнять кого-то</br>
        ⨠ a!hug - обнять</br>
        ⨠ a!poke @user - тыкунть в кого-то</br>
        ⨠ a!poke  - тыкунть</br>
        ⨠ a!sad @user - грустить из за кого-то</br>
        ⨠ a!sad - грустить</br>
        ⨠ a!smile @user - улыбаться с кем-то</br>
        ⨠ a!smile - улыбаться</br>
        ⨠ a!kiss @user - поцеловать кого-то</br>
        ⨠ a!pat @user - погладить кого-то</br>
        ⨠ a!pat  - погладить</br>
        ⨠ a!smoke @user - покурить с кем-то</br>
        ⨠ a!smoke  - покурить</br>
        ⨠ a!feed @user - покормить кого-то</br>
        ⨠ a!hit @user - ударить кого-то</br>
        ⨠ a!hit - ударить</br>
        ⨠ a!take - взять за руку</br>
        ⨠ a!kill @user - убить кого-то</br>
        ⨠ a!suicide - убить себя</br>
        ⨠ a!cry @user - плакать из за кого-то</br>
        ⨠ a!cry - плакать</br>
        ⨠ a!wave - помахать</br>",

        "Utilits" => "Утилиты",
        "utilitscomm" => "⨠ a!stats - техническая информация Anni</br>
        ⨠ a!avatar - аватарка пользователя</br>
        ⨠ a!avatars - рандомная аватарка</br>
        ⨠ a!server - информация сервера</br>
        ⨠ a!user @пользователь - информация о пользователе</br>",

        "hentai" => "Хенатй команнды",
        "hentaicomm" => "⨠ a!nsfw - hentai</br>
        ⨠ a!kuni - куни</br>
        ⨠ a!pussy - киска</br>
        ⨠ a!trap - трап</br>
        ⨠ a!feet - ножки</br>
        ⨠ a!lesbian - лесбианка</br>",

        "Animals" => "Животные",
        "animalsdesc" => "⨠ a!dog - собака</br>
        ⨠ a!cat - кошка</br>
        ⨠ a!panda - панда</br>
        ⨠ a!pikachu - пикачу ( Знаю что не животное ^^ )</br>",

        "Read" => "Прочитай",
        "Readdesc" => "— Привет, хочу сказать что, мне сложно делать всё это в одиночку, но я стараюсь </br>
        — Скажу честно, хотелось бы найти друга, или команду, с которыми мы будем делать много интересного </br>
        — У меня маленький опыт в программоровании, но всё что вы видите связоное со мной, я добился трудом!</br>
        — Не спал ночами, плакал, забрасывал, но вот я сижу пишу этот сайт, на часах три часа 🌃</br>
        — Связь со мной: ",
        // FAQ
        "developertext" => "Разработчики",
        "Developer" => "Разработчик бота!",
        "FrutDesc" => "Мотиватор",
        // title
        "information" => "Информация",
        "commandFoot" => "Команды"
    ];
}

if($_SESSION['lang'] == 'en'){
    $getLangSys = [];
    
    $lang = [
        // Home
        "homebtn" => "Home",
        "commandsbtn" => "Commands",
        "main1" => "Im perfectly💜 for you'r server!",
        "main2" => "You can invite me to</br> server, then enjoy to our support server,</br>when Zullls will can help you.</br>My prefixes: anni, Anni, a!",
        "addButton" => "Add a bot",
        // Command
        "command1" => "What's in the bot?",
        "scroll" => "RolePlay, Moderations, Utilits!",
        "allcommnd" => "In total: 40 commands!",
        "Admincommand" => "Admin commands",

        "admins" => "⨠ a!ban @user reason - ban user on server! </br>
        ⨠ a!kick @user reason - kick user from server! </br>
        ⨠ a!clear clear 1 to 50 - clear chat</br>",
        "RolePlay" => "Roleplay",
        
        "rpcommand" => "⨠ a!hug @user - hug someone</br>
        ⨠ a!hug - hug</br>
        ⨠ a!poke @user - poke at someone</br>
        ⨠ a!poke  - poke</br>
        ⨠ a!sad @user - sadnes at someone</br>
        ⨠ a!sad - sadnes</br>
        ⨠ a!smile @user - smile at someone</br>
        ⨠ a!smile - smile</br>
        ⨠ a!kiss @user - kiss at someone</br>
        ⨠ a!pat @user - pat at someone</br>
        ⨠ a!pat  - pat</br>
        ⨠ a!smoke @user - smoke at someone</br>
        ⨠ a!smoke  - smoke</br>
        ⨠ a!feed @user - feed someone</br>
        ⨠ a!hit @user - hit someone</br>
        ⨠ a!hit - hit</br>
        ⨠ a!take - take a hand</br>
        ⨠ a!kill @user - kill someone</br>
        ⨠ a!suicide - kill yourself</br>
        ⨠ a!cry @user -cry for someone</br>
        ⨠ a!cry - cryning</br>
        ⨠ a!wave - wave</br>",

        "Utilits" => "Utilits",
        "utilitscomm" => "⨠ a!stats - technical information Anni</br>
        ⨠ a!avatar - user avatar</br>
        ⨠ a!avatars - random avatar</br>
        ⨠ a!server - server info</br>
        ⨠ a!user @user - user info</br>",

        "hentai" => "Hentai command",
        "hentaicomm" => "⨠ a!nsfw - hentai</br>
        ⨠ a!kuni - cooney</br>
        ⨠ a!pussy - pussy</br>
        ⨠ a!trap - trap</br>
        ⨠ a!feet - feet</br>
        ⨠ a!lesbian - lesbian</br>",

        "Animals" => "Animals",
        "animalsdesc" => "⨠ a!dog - dog</br>
        ⨠ a!cat - cat</br>
        ⨠ a!panda - panda</br>
        ⨠ a!pikachu - pikachu ( I know that it is not an animal ^^ )</br>",

        "Read" => "Read",
        "Readdesc" => "— Hi, I want to say that it is difficult for me to do all this alone, but I try </br>
        — Frankly, I would like to find a friend, or a team with whom we will do a lot of interesting things </br>
        — I have little experience in programming, but everything that you see connected with me, I achieved with difficulty!</br>
        — I didn’t sleep at night, I cried, I threw it up, but I’m sitting here, writing this site, on the clock for three hours 🌃</br>
        — Contact me: ",
        // FAQ
        "developertext" => "Developers",
        "Developer" => "Developer WuW",
        "FrutDesc" => "Motivator",
        // title
        "information" => "Information",
        "commandFoot" => "Commands"
    ];
}

// HTTP page name system
$url = $_SERVER['REQUEST_URI'];
if($url == '/'){
    define("HTTP_PAGE_NAME", $lang['homebtn']);
} 
if($url == '/command'){
    define("HTTP_PAGE_NAME", $lang['commandsbtn']);
} 
if($url == '/faq'){
    define("HTTP_PAGE_NAME", $lang['information']
);
} 

?>