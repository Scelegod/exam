<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./NewsStyles.css">
    <link rel="stylesheet" href="../style/all.css">
    <link rel="stylesheet" href="../style/chat.css">
    <link rel="stylesheet" href="../style/footer.css">
    <link rel="stylesheet" href="../style/header.css">
    <title>moshenniki</title>
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


<!-- MOSHENNIKI -->

    
        <div class="news_header">
            <div class="header_data">
                <div class="header_data_day_and_month">
                    13 июля
                </div>
                <div class="header_data_year">
                    2021
                </div>
            </div>
            <div class="header_title">
                <b>Внимание! Мошенники!</b>
            </div>
        </div>
    <div class="news_content">
        Уважаемые клиенты, в последнее время участились случаи мошенничества посредством создания фишинговых сайтов, дизайн которых в точности повторяет дизайн проверенных и надежных обменников. Хотим напомнить Вам, что наш сервис имеет только один адрес - fastchange.me. Мы не имеем никакого отношения к любым сторонним сайтам и сервисам и никогда не производим обмен посредством ботов в телеграм, соцсетях и т.п. Если Вам предлагают совершить обмен в обход создания заявки на нашем сервисе - обратитесь в наш онлайн-чат на сайте или на почту ......... во избежание потери средств. Будьте бдительны, желаем Вам только быстрых и качественных обменов!
    </div>
    <div class="back_button_block">
        <div class="back_button" onclick="location='./news_main.php'" style="cursor: pointer">
            <div class="back_button_arrow">
                ←
            </div>
            <div class="back_button_name">
                Все новости
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