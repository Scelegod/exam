<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/reset.css">
    <link rel="stylesheet" href="./sign.css">
    <link rel="stylesheet" href="../style/all.css">
    <link rel="stylesheet" href="../style/chat.css">
    <link rel="stylesheet" href="../style/footer.css">
    <link rel="stylesheet" href="../style/header.css">
    <title>Sign</title>
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
        <div class="avt--block"><button class="avt" style="cursor:pointer;">Авторизация</button></div>
</header>


<!-- LOGO -->


    <div class="logo--block" ><img class="logo--img" onclick="location='../main/Form.php'" style="cursor:pointer;" src="../main/imgs/logotip.svg" alt="logo"></div>

    
<!-- SIGN -->


    <div class="container--flex">
        <div class="container" id="container">
            <div class="form-container-sign sign-up-container">
                    <?php
                        require './../session/connect.php';
                        require './../session/regist.php';
                        require './../session/signin.php';
                    ?>
                <form method="post">
                    <h1 class="headline--sign">Регистрация</h1>
                    <div class="social-container">
                        <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                        <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <span class="sign--dopText">или используйте свою учетную запись</span>
                    <input type="text" placeholder="Name" name="fio" />
                    <input type="email" placeholder="Email" name="email"/>
                    <input type="password" placeholder="Password" name="pass" />
                    <button type="submit" class="SignIn--SignUp">Зарегестрироваться</button>
                </form>
            </div>
            <div class="form-container-sign sign-in-container">
                <form method="post">
                    <h1 class="headline--sign">Войти</h1>
                    <div class="social-container">
                        <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                        <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <span class="sign--dopText">или используйте свою учетную запись</span>
                    <input type="email" placeholder="Email" name="email2"/>
                    <input type="password" placeholder="Password" name="pass2" />
                    <button type="submit" class="SignIn--SignUp">Войти</button>
                </form>
            </div>
            <div class="overlay-container">
                <div class="overlay">
                    <div class="overlay-panel overlay-left">
                        <h1>Добро пожаловать!</h1>
                        <p class="sign--text">Чтобы оставаться на связи с нами, пожалуйста, войдите, используя свои личные данные.</p>
                        <button class="ghost" id="signIn">Войти</button>
                    </div>
                    <div class="overlay-panel overlay-right">
                        <h1>Добро пожаловать!</h1>
                        <p class="sign--text">Чтобы оставаться на связи с нами, пожалуйста, войдите, используя свои личные данные.</p>
                        <button class="ghost" id="signUp">Зарегестрироваться</button>
                    </div>
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


    <script src="../chat/chat.js"></script>
    
    <script src="../sign/sign.js"></script>
</body>
</html>