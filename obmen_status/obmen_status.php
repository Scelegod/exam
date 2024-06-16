<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./obmen_status.css">
    <link rel="stylesheet" href="../style/all.css">
    <link rel="stylesheet" href="../style/chat.css">
    <link rel="stylesheet" href="../style/footer.css">
    <link rel="stylesheet" href="../style/header.css">
    <title>Document</title>
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


<!-- OBMEN_STATUS -->


<div class="container_obmen">
    <div class="container_obmen--block">
        <div class="container_obmen--zagolovok">Заявка #</div>
        <div class="container_obmen--zagolovok">КУРС ОБМЕНА:</div>
        <div class="container_obmen--flex">
            <div class="container_obmen--flex--block">
                <div class="container_obmen--text">что-то будет</div>
                <div class="container_obmen--text">Необходимо отправить</div>
            </div>
            <div class="container_obmen--flex--block">
                <div class="container_obmen--text">что-то будет</div>
                <div class="container_obmen--text">Будет получено</div>
            </div>
        </div>
        <div class="container_obmen--flex">
            <div class="container_obmen--flex--block">
                <div class="container_obmen--text2">Предварительная заявка</div>
                <div class="container_obmen--text2">Статус</div>
            </div>
            <div class="container_obmen--flex--block">
                <div class="container_obmen--text2">Служба поддержки</div>
                <div class="container_obmen--text2">По вопросам</div>
            </div>
        </div>
        <div class="container_obmen--block--line"><span class="container_obmen--line"></span></div>
        <div class="container_obmen--instruction">
            <div class="container_obmen--text2 gap">Для завершения создания заявки необходимо</div>
            <div class="container_obmen--text2 gap">1. Осуществите перевод на сумму сколько-то по следующим реквезитам:</div>
            <div class="container_obmen--text2 gap">0x58b2b0DE5cb94671F6f954B57D4F6bc6142D093e</div>
            <div class="container_obmen--text2 gap">2. После списания средств со счета нажмите кнопку <a class="container_obmen--color--text">"Я оплатил"</a></div>
        </div>
        <div class="container_obmen--block--button"><button class="container_obmen--button">Я оплатил</button></div>
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