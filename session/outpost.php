<?php
 if (!empty($_SESSION['auth']) and empty($_POST['exit'])) {
    if($_SESSION['user']['email2']=='admin@gmail.com' and $_SESSION['user']['pass2']=='admin' ){
    echo '<button class="avt" onclick="location=`../lc/lcAdmin.php`" style="cursor:pointer;">';
    echo '<div class="main__info__user">';
    echo '<div class="main__info__user__name">' . $_SESSION['user']['fio'] . '</div>';
    echo '</div>';
    echo '</button>';

    } else{
        echo '<button class="avt" onclick="location=`../lc/lc.php`" style="cursor:pointer;">';
    echo '<div class="main__info__user">';
    echo '<div class="main__info__user__name">' . $_SESSION['user']['fio'] . '</div>';
    echo '</div>';
    echo '</button>';
    }
    //     echo '<button class="avt" onclick="location=`../lc/lc.php`" style="cursor:pointer;">';
    // echo '<div class="main__info__user">';
    // echo '<div class="main__info__user__name">' . $_SESSION['user']['fio'] . '</div>';
    // echo '</div>';
    // echo '</button>';
// }else if(!empty($_SESSION['authDoc']) and empty($_POST['exit'])){
    // echo '<button class="avt" onclick="location=`../lc/lcAdmin.php`" style="cursor:pointer;">';
    // echo '<div class="main__info__user">';
    // echo '<div class="main__info__user__name">' . $_SESSION['user']['customer_lname'] . '</div>';
    // echo '</div>';
    // echo '</button>';
}else{
    echo '<button class="avt" onclick="location=`../sign/sign.php`" style="cursor:pointer;">' . 'Авторизация' . '</button>';
}