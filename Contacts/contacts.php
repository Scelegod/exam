<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./contacts.css">
    <link rel="stylesheet" href="../style/all.css">
    <link rel="stylesheet" href="../style/chat.css">
    <link rel="stylesheet" href="../style/footer.css">
    <link rel="stylesheet" href="../style/header.css">
    <title>Contacts</title>
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


<!-- CONTACTS -->


    <div class="title">
        <p>Контакты сервиса</p>
    </div>
    <div class="info_widow">
        <div class="info_column">
            <div class="socials_and_email">
                <div class="socials">
                    <div class="telegram" onclick="location='https://webogram.org/z/'" style="cursor: pointer">
                        <img src="telegram.svg"> <p class="social_name">Telegram</p>
                    </div>
                    <div class="vk" onclick="location='https://vk.com/'" style="cursor: pointer">
                        <img src="vkontakte.svg"> <p class="social_name">Vkontakte</p>
                    </div>
                </div>
                <div class="email">
                    <img src="email.svg"> 
                    <div class="email_info">
                        <div class="email_name">
                            <p class="social_name">Email</p>
                        </div>
                        <div class="email_adress">
                            <p class="email_adress_support_and_partner">.............. <br> .............. (для рекламы и сотрудничества) </p>
                        </div>  
                    </div>
                </div>
            </div>
            <div class="warning">
                <p>Если что-то пошло не так, для большей оперативности напишите нам в online чат, кнопка для связи в нижней правой части экрана. Наши специалисты с радостью ответят на любые Ваши вопросы.</p>
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