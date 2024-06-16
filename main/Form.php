<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./convert.css">
    <link rel="stylesheet" href="../style/all.css">
    <link rel="stylesheet" href="../style/chat.css">
    <link rel="stylesheet" href="../style/footer.css">
    <link rel="stylesheet" href="../style/header.css">
    <link rel="stylesheet" href="../style/modal.css">
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


<!-- CONVENTER -->


        <div class="main">
            <div class="main__give">
                <p class="txt">Отдаете</p>
                <div class="give">
                    <div class="give__valute">
                        <button class="give__valute-button">Bitcoin</button>
                        
                        <ul class="give__valute-list">
                            <li class="give__valute-list-item" data-value="bitcoin">Bitcoin</li>
                            <li class="give__valute-list-item" data-value="tether">Tether</li>
                            <li class="give__valute-list-item" data-value="ethereum">Ethereum</li>
                            <li class="give__valute-list-item" data-value="litecoin">Litecoin</li>
                        </ul>
                        <input type="text" name="select-category" value="bitcoin" class="give__valute__input-hidden">
        
                        <input type="text" class="give__valute-inp" value="0.00296654">
                        
                        <button class="typeOfValute-button">BTC</button>
                        <ul class="typeOfValute-list-bitcoin">
                            <li class="typeOfValute-list-item" data-value="btc">BTC</li>
                            <li class="typeOfValute-list-item" data-value="bep20">BEP20</li>
                        </ul>
                        <ul class="typeOfValute-list-tether">
                            <li class="typeOfValute-list-item" data-value="trc20">TRC20</li>
                            <li class="typeOfValute-list-item" data-value="bep20Thr">BEP20</li>
                            <li class="typeOfValute-list-item" data-value="erc20Thr">ERC20</li>
                            <li class="typeOfValute-list-item" data-value="solThr">SOL</li>
                        </ul>
                        <ul class="typeOfValute-list-ethereum">
                            <li class="typeOfValute-list-item" data-value="erc20Eth">ERC20</li>
                            <li class="typeOfValute-list-item" data-value="bep20Eth">BEP20</li>
                        </ul>
                        <ul class="typeOfValute-list-litecoin">
                            <li class="typeOfValute-list-item" data-value="ltc">LTC</li>
                        </ul>
                        <input type="text" name="select-category" value="btc" class="typeOfValute__input-hidden">
        
                    </div>
                    <div class="give__email">
                        <input type="text" name="email" placeholder="E-mail" class="give__email-input">
                    </div>
                    <div class="give__warning">
                        <p class="give__warning-text">Требуется два подтверждения от сети Bitcoin.</p>
                    </div>
                </div>

            </div>
            <div class="middle"></div>
            <div class="main__take">
                <p class="txt">Получаете</p>
                <div class="take">
                    <div class="take__valute">
                        <button class="take__valute-button">Тинькофф</button>
                        
                        <ul class="take__valute-list">
                            <li class="take__valute-list-item" data-value="tinkoff">Тинькофф</li>
                            <li class="take__valute-list-item" data-value="sber">Сбербанк</li>
                        </ul>

                        <input type="text" name="select-category" value="tinkoff" class="take__valute__input-hidden">
        
                        <input type="text" class="take__valute-inp" value="5601.8852708">

                        <p class="rub">RUB</p>
                        
                    </div>

                    <div class="take__fullName">
                        <input type="text" name="number" placeholder="ФИО получателя" class="take__fullName-input">
                    </div>

                    <div class="take__number">
                        <input type="text" name="number" placeholder="Номер телефона" class="take__number-input">
                    </div>
                    
                    <div class="take__qiwi">
                        <input type="text" name="number" placeholder="QIWI кошелек" class="take__qiwi-input">
                    </div>

                    <div class="take__warning">
                        <p class="take__warning-text">Перевод только на банковские карты РФ.</p>
                    </div>


                    <input type="checkbox" name="agree" hidden class="agreeCheck">
                    <form action="./zayvkaVBd.php" method="post" class="firma">
                        <input type="text" hidden class="coin_name" name="coin_name">
                        <input type="text" hidden class="coin_count" name="coin_count">
                        <input type="text" hidden class="coin_plochadka" name="coin_plochadka">
                        <input type="text" hidden class="bank_name" name="bank_name">
                        <input type="text" hidden class="bank_count" name="bank_count">
                        <input type="text" hidden class="bank_kurs" name="bank_kurs">
                        <input type="text" hidden class="customers_tel" name="customers_tel">
                        <input type="text" hidden class="customers_fio" name="customers_fio">
                        <input type="text" hidden class="customers_email" name="customers_email">
                    <button type="submit" class="submit">Создать заявку</button>
                    </form>
                </div>
            </div>
        </div>


<!-- INFO -->

        
        <div class="info">
            <div class="block1">
                    <img src="imgs/1.png" alt="1">
                    <p><b>PROFITABLE EXCHANGE 24/7</b></p>
                    <p>We have been providing high-quality online currency exchange for 5 years.</p>
            </div>
            <div class="block2">
                    <img src="imgs/2.png" alt="2">
                    <p><b>EXTREME RELIABILITY</b></p>
                    <p>Any doubts about that? If something went wrong, we will always refund your money. Remember this.</p>
            </div>
            <div class="block1">
                <img src="imgs/3.png" alt="3">
                <p><b>QUICK EXCHANGE IN LESS THAN 7 MIN.</b></p>
                <p>We are loved both for reliability and the best rate, as well as for a quick exchange.</p>
            </div>
            <div class="block2">
                <img src="imgs/4.png" alt="4">
                <p><b>3160 EXCHANGE TYPES</b></p>
                <p>We make the most popular types of exchanges. You can always exchange your money.</p>
            </div>
            <div class="block1">
                <img src="imgs/5.png" alt="5">
                <p><b>100% EXCHANGE GUARANTEE</b></p>
                <p>Numerous positive feedback confirm the high quality of our work.</p>
            </div>
            <div class="block2">
                <img src="imgs/6.png" alt="6">
                <p><b>COST-EFFICIENT EXCHANGE</b></p>
                <p>We always have loyal rates. We are always open to cooperation, please contact us.</p>
            </div>
        </div>


<!-- FOOTER -->

        
        <div class="footer">
            <div class="footer-left">
                <a href="#">
                    <img class="bestChPic" src="./imgs/BestChange.png" alt="BestChPic">
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
                        <img class="logo" src="./imgs/telegramLogo.png" alt="TelegramLogoPic">
                    </a>
                    <a href="#">
                        <img class="logo" src="./imgs/vkLogo.png" alt="vkLogoPic">
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
    <script src="../main/dropdown.js"></script>
    <script src="../main/zayvka.js"></script>
</body>
</html>