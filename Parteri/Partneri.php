<?php
session_start();
?>
<html lang="ru-RU">
    <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./partneri.css">
    <link rel="stylesheet" href="../style/all.css">
    <link rel="stylesheet" href="../style/chat.css">
    <link rel="stylesheet" href="../style/footer.css">
    <link rel="stylesheet" href="../style/header.css">
    <title>Партнерам</title>
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


<!-- PARNERI -->

        
        <div id="container">
            <div class="main display-flex set-center">
                <div class="main__center display-flex set-center">
                    <div class="main__partners container__area  addaptive__main-11 addaptive-11">
                        <div class="partners__text">
                            <span>ПАРТНЕРАМ СЕРВИСА</span>
                        </div>
                        <div class="display-flex">
                            <div class="container__area addaptive-9">
                                <div class="main__information">
                                    <div class="display-flex set-center">
                                        <div class="about container__area">
                                            <div class="display-flex">
                                                <div class="container__area">
                                                    <div style="color: rgb(72, 66, 59); margin-bottom: 30px; font-weight: 600;">
                                                        Перед тем как воспользоваться услугами сервиса , Пользователь обязан ознакомиться в полном объеме с Правилами и условиями предоставления услуг сервисом . Использование услуг сервиса возможно только в случае, если Пользователь принимает все условия соглашения.
                                                    </div>
                                                </div>
                                                <div class="container__area">
                                                    <h2 style="color: rgb(72, 66, 59); margin-bottom: 30px;">РЕФЕРАЛЬНАЯ ПРОГРАММА</h2>
                                                </div>
                                                <div class="container__area">
                                                    <div style="font-size: 16px;">
                                                        Приглашаем Вас к сотрудничеству. Зарабатывать с Fastchange легко, и мы Вам в этом поможем. Наш сервис предлагает не только реферальный заработок, но и систему скидок, которая будет приносить приятный доход:
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="offers display-flex">
                                        <div class="offers__interest container__area  addaptive__main-4">
                                            <div class="sprite">
                                                <img src="sprites/reflevel1.svg">
                                                <span class="sprite__text">Реферальный заработок 0.5% с 1 до 20 реферала</span>
                                            </div>
                                        </div>
                                        <div class="offers__interest container__area  addaptive__main-4">
                                            <div class="sprite">
                                                <img src="sprites/reflevel2.svg">
                                                <span class="sprite__text">Реферальный заработок 0.7% с 20 до 70 реферала</span>
                                            </div>
                                        </div>
                                        <div class="offers__interest container__area addaptive__main-4">
                                            <div class="sprite">
                                                <img src="sprites/reflevel3.svg">
                                                <span class="sprite__text">Реферальный заработок 0.9% с 70 рефералов  и более</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="column display-flex set-center">
                                        <div class=" container__area addaptive__main-6" style="font-weight: 600;">
                                            <img src="sprites/partnerWallet.svg">
                                            <br>Чтобы зарабатывать уже сегодня, зарегистрируйтесь на сайте. Просто передайте свою реферальную ссылку Вашему рефералу.
                                        </div>
                                        <div class=" container__area addaptive__main-6">
                                            <img src="sprites/partnerCash.svg">
                                            <br>Реферальный заработок актуален при соблюдении правил пользования и имеет накопительную систему. Распространяется исключительно на лиц, перешедших по реферальной ссылке пользователя обменного сервиса Fastchange.
                                        </div>
                                    </div>
                                    <div class="column display-flex set-center" style="border-top: 2px solid rgb(238, 238, 238);">
                                        <div class="container__area  addaptive__main-6">
                                            <h4>Обратите внимание</h4>
                                            Реферальная программа действует лишь в том случае, если обменный сервис имеет заработок с настоящего обмена. В противном случае, реферальная система не актуальна.
                                        </div>
                                        <div class=" container__area  addaptive__main-6">
                                            <h4>ЭКСПОРТ КУРСОВ</h4>
                                            Если Вы представляете сервис мониторинга или профильный форум, Вы можете экспортировать наши курсы на свой сервис для последующей обработки в реальном времени
                                            <br>Экспорт курсов: 
                                            <button class="column__button" target="_blank">
                                                <span class="button-text">XML</span>
                                            </button>
                                            <button class="column__button" target="_blank">
                                                <span class="button-text">JSON</span>
                                            </button>
                                        </div>
                                    </div>
                                    <div style="padding: 0px 30px 30px;">
                                        <div class="questions">
                                            <div>
                                                <div style="z-index: 2;">
                                                    Если у Вас возникнут вопросы, Вы всегда можете написать нам в чат. Мы с радостью ответим на все интересующие Вас вопросы, по работе нашего обменного сервиса.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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


    <script src="../Q&A/chat.js"></script>
    </body>
</html>