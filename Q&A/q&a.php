<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./q&a.css">
    <link rel="stylesheet" href="../style/all.css">
    <link rel="stylesheet" href="../style/chat.css">
    <link rel="stylesheet" href="../style/footer.css">
    <link rel="stylesheet" href="../style/header.css">
    <title>Q&A</title>
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


<!-- Q&A -->


    <div id="page_container">
        <div class="page_content_container">
            <div class="header">
                <div class="menu_title">Пользователям</div>
                <div class="menu_buttons">
                    <div class="menu_button">Общие вопросы</div>
                    <div class="menu_button">Вопросы по оплате заявок</div>
                    <div class="menu_button">Вопросы по криптовалютам</div>
                    <div class="menu_button">Реферальная программа</div>
                </div>
            </div>
        </div>
    </div>
    <div id="main_questions_and_answers">
        <div class="title_question">
            <div class="question_logo">
                ?
            </div>
            <div class="spoiler_wrap">
                <div class="spoiler_title">Как зарегистрироваться?
                    <span class="spoiler_arrow"><svg viewBox="-122.9 121.1 105.9 61.9"><path d="M-63.2 180.3l43.5-43.5c1.7-1.7 2.7-4 2.7-6.5s-1-4.8-2.7-6.5c-1.7-1.7-4-2.7-6.5-2.7s-4.8 1-6.5 2.7L-69.9 161l-37.2-37.2c-1.7-1.7-4-2.7-6.5-2.7s-4.8 1-6.5 2.6c-1.9 1.8-2.8 4.2-2.8 6.6 0 2.3.9 4.6 2.6 6.5 11.4 11.5 41 41.2 43 43.3l.2.2c3.6 3.6 10.3 3.6 13.9 0z"></path></svg></span>
                </div>
                <div class="spoiler_content">
                    <p>Процесс регистрации в нашем сервисе максимально упрощен - Вам необходимо указать действующий адрес электронной почты и придумать надежный пароль. После чего Вы получите письмо со ссылкой, пройдя по которой, завершите процесс регистрации. Также регистрация происходит автоматически после первого обмена.</p>
                    <p>Функционал личного кабинета пользователя:</p> 
                    <ul>
                        <li>1) Отслеживание статуса Ваших заявок;</li>
                        <li>2) Получение доступа к Вашей персональной реферальной ссылке;</li>
                        <li>3) Вывод реферальных начислений;</li>
                        <li>4) Добавление и управление Вашими реквизитами.</li>
                    </ul>
                    <p>Если Вы планируете пользоваться реферальной программой, советуем предварительно ознакомиться с положениями партнерской программы.</p> 
                </div>
            </div>
        </div>
        <div class="title_question">
            <div class="question_logo">
                ?
            </div>
            <div class="spoiler_wrap">
                <div class="spoiler_title">Минимальная и максимальная суммы обмена
                    <span class="spoiler_arrow"><svg viewBox="-122.9 121.1 105.9 61.9"><path d="M-63.2 180.3l43.5-43.5c1.7-1.7 2.7-4 2.7-6.5s-1-4.8-2.7-6.5c-1.7-1.7-4-2.7-6.5-2.7s-4.8 1-6.5 2.7L-69.9 161l-37.2-37.2c-1.7-1.7-4-2.7-6.5-2.7s-4.8 1-6.5 2.6c-1.9 1.8-2.8 4.2-2.8 6.6 0 2.3.9 4.6 2.6 6.5 11.4 11.5 41 41.2 43 43.3l.2.2c3.6 3.6 10.3 3.6 13.9 0z"></path></svg></span>
                </div>
                <div class="spoiler_content">
                    <p>Максимальную и минимальную сумму на обмен по интересующему Вас направлению Вы можете узнать на странице создания заявки.
                </div>
            </div>
        </div>
        <div class="title_question">
            <div class="question_logo">
                ?
            </div>
            <div class="spoiler_wrap">
                <div class="spoiler_title">Почему мне на почту не приходят письма о статусе заявки
                    <span class="spoiler_arrow"><svg viewBox="-122.9 121.1 105.9 61.9"><path d="M-63.2 180.3l43.5-43.5c1.7-1.7 2.7-4 2.7-6.5s-1-4.8-2.7-6.5c-1.7-1.7-4-2.7-6.5-2.7s-4.8 1-6.5 2.7L-69.9 161l-37.2-37.2c-1.7-1.7-4-2.7-6.5-2.7s-4.8 1-6.5 2.6c-1.9 1.8-2.8 4.2-2.8 6.6 0 2.3.9 4.6 2.6 6.5 11.4 11.5 41 41.2 43 43.3l.2.2c3.6 3.6 10.3 3.6 13.9 0z"></path></svg></span>
                </div>
                <div class="spoiler_content">
                    <p>При создании первой заявки, Вам было выслано письмо для подтверждения адреса электронной почты. В случае, если Вы не подтвердили Ваш адрес, письма не будут поступать.
                </div>
            </div>
        </div>
        <div class="title_question">
            <div class="question_logo">
                ?
            </div>
            <div class="spoiler_wrap">
                <div class="spoiler_title">Восстановление доступа к личному кабинету
                    <span class="spoiler_arrow"><svg viewBox="-122.9 121.1 105.9 61.9"><path d="M-63.2 180.3l43.5-43.5c1.7-1.7 2.7-4 2.7-6.5s-1-4.8-2.7-6.5c-1.7-1.7-4-2.7-6.5-2.7s-4.8 1-6.5 2.7L-69.9 161l-37.2-37.2c-1.7-1.7-4-2.7-6.5-2.7s-4.8 1-6.5 2.6c-1.9 1.8-2.8 4.2-2.8 6.6 0 2.3.9 4.6 2.6 6.5 11.4 11.5 41 41.2 43 43.3l.2.2c3.6 3.6 10.3 3.6 13.9 0z"></path></svg></span>
                </div>
                <div class="spoiler_content">
                    <p>Вам необходимо нажать на кнопку "Забыли пароль?" на странице авторизации в личный кабинет. После ввода Вашего e-mail адреса, Вам придет письмо со ссылкой для восстановления пароля.
                </div>
            </div>
        </div>
        <div class="title_question">
            <div class="question_logo">
                ?
            </div>
            <div class="spoiler_wrap">
                <div class="spoiler_title">Могу ли я совершить обмен без создания заявки
                    <span class="spoiler_arrow"><svg viewBox="-122.9 121.1 105.9 61.9"><path d="M-63.2 180.3l43.5-43.5c1.7-1.7 2.7-4 2.7-6.5s-1-4.8-2.7-6.5c-1.7-1.7-4-2.7-6.5-2.7s-4.8 1-6.5 2.7L-69.9 161l-37.2-37.2c-1.7-1.7-4-2.7-6.5-2.7s-4.8 1-6.5 2.6c-1.9 1.8-2.8 4.2-2.8 6.6 0 2.3.9 4.6 2.6 6.5 11.4 11.5 41 41.2 43 43.3l.2.2c3.6 3.6 10.3 3.6 13.9 0z"></path></svg></span>
                </div>
                <div class="spoiler_content">
                    <p>Все обмены производятся только по заявкам. Если Вы по какой-либо причине отправили средства на наши реквизиты без создания заявки, они будут Вам возвращены за вычетом комиссии, если таковая будет присутствовать. При отправке нам средств с карты, не верифицированной в нашем сервисе, Вам необходимо будет верифицировать ее перед возвратом средств.
                </div>
            </div>
        </div>
        <div class="title_question">
            <div class="question_logo">
                ?
            </div>
            <div class="spoiler_wrap">
                <div class="spoiler_title">Как узнать номер заявки?
                    <span class="spoiler_arrow"><svg viewBox="-122.9 121.1 105.9 61.9"><path d="M-63.2 180.3l43.5-43.5c1.7-1.7 2.7-4 2.7-6.5s-1-4.8-2.7-6.5c-1.7-1.7-4-2.7-6.5-2.7s-4.8 1-6.5 2.7L-69.9 161l-37.2-37.2c-1.7-1.7-4-2.7-6.5-2.7s-4.8 1-6.5 2.6c-1.9 1.8-2.8 4.2-2.8 6.6 0 2.3.9 4.6 2.6 6.5 11.4 11.5 41 41.2 43 43.3l.2.2c3.6 3.6 10.3 3.6 13.9 0z"></path></svg></span>
                </div>
                <div class="spoiler_content">
                    <p>Номер заявки Вы можете узнать в личном кабинете или в письме на почте, которую Вы указали при создании заявки.
                </div>
            </div>
        </div>
        <div class="title_question">
            <div class="question_logo">
                ?
            </div>
            <div class="spoiler_wrap">
                <div class="spoiler_title">Что значит "почистите кэш (cache) и куки (cookies)"?
                    <span class="spoiler_arrow"><svg viewBox="-122.9 121.1 105.9 61.9"><path d="M-63.2 180.3l43.5-43.5c1.7-1.7 2.7-4 2.7-6.5s-1-4.8-2.7-6.5c-1.7-1.7-4-2.7-6.5-2.7s-4.8 1-6.5 2.7L-69.9 161l-37.2-37.2c-1.7-1.7-4-2.7-6.5-2.7s-4.8 1-6.5 2.6c-1.9 1.8-2.8 4.2-2.8 6.6 0 2.3.9 4.6 2.6 6.5 11.4 11.5 41 41.2 43 43.3l.2.2c3.6 3.6 10.3 3.6 13.9 0z"></path></svg></span>
                </div>
                <div class="spoiler_content">
                    <p>Веб-страницы нашего сайта могут отображаться некорректно в связи с тем, что в них были внесены изменения, а Ваш браузер продолжает использовать устаревшие данные из кэша.

                    <p>В таких случаях мы просим почистить кэш и куки для того, чтобы весь функционал нашего сервиса работал полноценно и безошибочно.
                </div>
            </div>
        </div>
        <div class="title_question">
            <div class="question_logo">
                ?
            </div> 
            <div class="spoiler_wrap">
                <div class="spoiler_title">Могу ли я предложить вам сотрудничество?
                    <span class="spoiler_arrow"><svg viewBox="-122.9 121.1 105.9 61.9"><path d="M-63.2 180.3l43.5-43.5c1.7-1.7 2.7-4 2.7-6.5s-1-4.8-2.7-6.5c-1.7-1.7-4-2.7-6.5-2.7s-4.8 1-6.5 2.7L-69.9 161l-37.2-37.2c-1.7-1.7-4-2.7-6.5-2.7s-4.8 1-6.5 2.6c-1.9 1.8-2.8 4.2-2.8 6.6 0 2.3.9 4.6 2.6 6.5 11.4 11.5 41 41.2 43 43.3l.2.2c3.6 3.6 10.3 3.6 13.9 0z"></path></svg></span>
                </div>
                <div class="spoiler_content">
                    <p>Мы всегда готовы к сотрудничеству и рады выслушать все Ваши предложения на нашей почте ................
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
jQuery(document).ready(function($) {
  $('.spoiler_title').click(function() {
     $(this).parents('.spoiler_wrap').find('.spoiler_content').toggleClass('open');
         $(this).parents('.spoiler_wrap').find('.spoiler_arrow').toggleClass('open');
  });
});
</script>
</body>
</html>