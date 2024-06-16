<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./lc.css">
    <link rel="stylesheet" href="../style/all.css">
    <link rel="stylesheet" href="../style/chat.css">
    <link rel="stylesheet" href="../style/footer.css">
    <link rel="stylesheet" href="../style/header.css">
    <link rel="stylesheet" href="../style/modal.css">
    <title>Lc</title>
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

    <?php
    // require './../session/exit.php'
    ?>
    <div class="modalExit">
        <div class="modalExittitle">
            Вы уверены, что хотите выйти? 
            <form action="../session/exit.php" method="POST" class="modalExitform">
                <input type="hidden" name="exit" value="0" class="dispnone" id="exit">
                <input type="checkbox" hidden name="exit" value="1" class="dispnone" id="exit2" checked>
                <button name="exit1" class="modalExitbtn logout" type="submit">Да</button>
                <button class="modalExitbtn modalExitbtncontent" type="button">Отменить</button>
            </form>
        </div>
    </div>


    <!-- LOGO -->
    <div class="logo--block" ><img class="logo--img" onclick="location='../main/Form.php'" style="cursor:pointer;" src="../main/imgs/logotip.svg" alt="logo"></div>
    
<div class="koshelishe">
        <?php
            require './php/koshel.php';
            require './php/bank.php';
        ?>
    </div>
</div>
    

<!-- LC -->
    
    <div class="zagolovok-lc"><p class="lc">Личный кабинет</p></div>
    <div class="zayvki">
        <div class="zayvki--block">
            <div class="zayvki--moi">
                <?php
                    require './php/outputZayvki.php';
                ?>
                <div class="zayvki--null">
                    <div class="zagolovok--moi"><p class="moi">Заявки</p></div>
                    <div class="zayvki--text--block"><p class="zayvki--text">Вы пока не создали ни одной заявки.<br> Чтобы это сделать, нажмите на кнопку</p></div>
                    <div class="creat--btn--block"><button onclick="location='../main/Form.php'" class="creat--btn">Создать заявку</button></div>
                </div>
            </div>
        </div>
        <div class="zayvki--nav">
            <div class="nav--btn"><a class="btn" href="#">ЗАЯВКИ</a></div>
            <div class="nav--btn"><a class="btn" href="#">РЕФЕРАЛЬНАЯ ПРОГРАММА</a></div>
            <div class="nav--btn"><a class="btn" href="#">УПРАВЛЕНИЕ РЕКВЕЗИТАМИ</a></div>
            <div class="nav--btn"><a class="btn" href="#">НАСТРОЙКИ</a></div>
            <div class="nav--btn"><a class="btn exitbtn" href="#">ВЫЙТИ ИЗ АККАУНТА</a></div>
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="../Q&A/chat.js"></script>
    <script src="./exit.js"></script>
    <script src="./manipulationZayvki.js"></script>
</body>
</html>