<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./news_main.css">
    <link rel="stylesheet" href="../style/all.css">
    <link rel="stylesheet" href="../style/chat.css">
    <link rel="stylesheet" href="../style/footer.css">
    <link rel="stylesheet" href="../style/header.css">
    <title>News</title>
</head>
<body>


<!-- HEADER -->


    <header class="header">
        <!-- <div class="logo--block" onclick="location='/main/Form.html'" style="cursor:pointer;"><img class="logo--img" src="/main/imgs/logo.png" alt="logo"></div> -->
        <div class="btnHeader--block">
            <button class="btn--header btn--headerFirst" onclick="location='../Parteri/Partneri.php'" style="cursor:pointer;">ПАРТНЁРАМ</button>
            <button class="btn--header" onclick="location='../News/news_main.php'" style="cursor:pointer;">НОВОСТИ</button>
            <button class="btn--header" onclick="location='../Q&A/q&a.php'" style="cursor:pointer;">ВОПРОСЫ И ОТВЕТЫ</button>
            <button class="btn--header btn--headerLast" onclick="location='../Contacts/contacts.php'" style="cursor:pointer;">КОНТАКТЫ</button>
        </div>
        <div class="avt--block">
        <?php 
        require './../session/connect.php';
        require './../session/outpost.php';
        ?>
        </div>
    </header>


<!-- LOGO -->


    <div class="logo--block" ><img class="logo--img" onclick="location='../main/Form.php'" style="cursor:pointer;" src="../main/imgs/logotip.svg" alt="logo"></div>


<!-- NEWS_MAIN -->


    <div class="page_name_block">
        <div class="page_name">
            <h1>Новости</h1>
        </div>
    </div>
    <div id="news_block">
        <div class="news" onclick="location='./obmen.php'" style="cursor: pointer">
            <div class="date">
                <b>11 июля</b> <br>2022
            </div>
            <div class="content">
                <b>Новые направления обмена!</b>
                <div class="content_description">
                    Открыты новые направления обмена 
                </div>
            </div>
        </div>
        <div class="news" onclick="location='./spb.php'" style="cursor: pointer">
            <div class="date">
                <b>21 октября</b> <br>2021
            </div>
            <div class="content">
                <b>Направление СБП добавлено на наш сервис</b>
                <div class="content_description">
                    Направление СБП добавлено на наш сервис 
                </div> 
            </div>
        </div>
        <div class="news" onclick="location='./moshenniki.php'" style="cursor: pointer">
            <div class="date">
                <b>13 июля</b> <br>2021
            </div>
            <div class="content">
                <b>Внимание! Мошенники!</b>
                <div class="content_description">
                    Будьте бдительны! 
                </div> 
            </div>
        </div>
        <div class="news" onclick="location='./newyear.php'" style="cursor: pointer">
            <div class="date">
                <b>30 декабря</b> <br>2020
            </div>
            <div class="content">
                <b>Поздравляем с новым 2021 годом!</b>
                <div class="content_description">
                    Поздравляем Вас с этим полшебным праздником! 
                </div>
            </div>
        </div>
        <div class="news" onclick="location='./umoney.php'" style="cursor: pointer">
            <div class="date">
                <b>19 ноября</b> <br>2020
            </div>
            <div class="content">
                <b>Открытие направления ЮMoney (Яндекс Деньги)</b>
                <div class="content_description">
                    Мы возобновляем работу с сервисом ЮMoney (Яндекс Деньги)!
                </div>
            </div>
        </div>
    </div>


<!-- FOOTER -->


    <div class="footer">
        <div class="footer-left">
            <a href="#">
                <img class="bestChPic" src="../main/imgs/BestChange.png" alt="BestChPic">
            </a>
            <span>
                <p class="footer-txt">HIGH-QUALITY AND FAST 24/7 CURRENCY EXCHANGE SERVICE
                    <span><p class="footer-txt">© All rights reserved. Copyright © 2015 - 2023</p></span>
                </p>
            </span>
            <br>
            <p></p>
        </div>
        <div class="footer-right">
            <div class="footer-right_links">
                <a href="#"></a>
            </div>
            <div class="logos">
                <a href="#">
                    <img class="logo" src="../main/imgs/telegramLogo.png" alt="TelegramLogoPic">
                </a>
                <a href="#">
                    <img class="logo" src="../main/imgs/vkLogo.png" alt="vkLogoPic">
                </a>
            </div>
        </div>
    </div>


<!-- CHAT -->


    <button class="open-button" onclick="openForm()">Чат</button>
    <div class="chat-popup" id="myForm">
      <form action="../action_page.php" class="form-container">
        <h1>Чат с поддержкой</h1>
        <label for="msg"><b>Ваше сообщение</b></label>
        <textarea placeholder="Писать тут" name="msg" required></textarea>
        <button type="submit" class="btn">Отправить</button>
        <button type="button" class="btn cancel" onclick="closeForm()">Закрыть</button>
      </form>
    </div>


<!-- SCRIPTS -->


    <script src="../Q&A/chat.js"></script>
</body>
</html>