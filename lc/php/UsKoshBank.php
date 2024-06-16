<?php
session_start();
require './.././../session/connect.php';
// if(!empty($_SESSION['auth']) and !empty($_POST['bank_name']) and !empty($_POST['bank_count'])){
    $idUs = $_SESSION['user']['id'];
    $bank_name = $_POST['bank_name'];
    $bank_count = $_POST['bank_count'];
    $sql2 = "SELECT * FROM `bank_cus` where `customer_code`='$idUs' and `bank_name`='$bank_name'";
    if($result = $link->query($sql2)){
        foreach($result as $row){
            // echo 
            $plus = (float)$row['bank_value'] + (float)$bank_count;
        }
    }
    echo $plus;
    $sql = "UPDATE `bank_cus` SET `bank_value` = '$plus' WHERE `bank_cus`.`customer_code` = '$idUs' and `bank_name`='$bank_name'";
    mysqli_query($link, $sql);
    
// }