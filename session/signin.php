<?php

    session_start();
    // require './connect.php';
    if(!empty($_POST['pass2']) and  !empty($_POST['email2'])){
    $email = $_POST['email2'];
    $password = ($_POST['pass2']);

    $check_user = mysqli_query($link, "SELECT * FROM `customers` WHERE `customer_email`='$email' AND `customer_pass`='$password'");
    if (mysqli_num_rows($check_user) > 0) {

        $user = mysqli_fetch_assoc($check_user);
        $_SESSION['auth'] = TRUE;
        $_SESSION['user'] = [
            "id" => $user['customer_id'],
            "fio" => $user['customer_lname'],
            "email2" => $user['customer_email'],
            "pass2" => $user['customer_pass'],
        ];
        header("Location: http://vkr/main/Form.php");
    }
}
    ?>
