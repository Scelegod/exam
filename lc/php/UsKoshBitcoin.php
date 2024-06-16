<?php
session_start();
require './.././../session/connect.php';
if(!empty($_SESSION['auth']) and !empty($_POST['bit_coin']) and !empty($_POST['bit_value'])){
    $idUs = $_SESSION['user']['id'];
    $coin_count = $_POST['bit_coin'];
    $coin_name = $_POST['bit_value'];
    $sql2 = "SELECT * FROM `bitcoin` where `customer_code`='$idUs' and `bit_coin`='$coin_name'";
    if($result = $link->query($sql2)){
        foreach($result as $row){
            $minus = (float)$row['bit_value'] - (float)$coin_count;
        }
    }
    echo $minus;
    $sql = "UPDATE `bitcoin` SET `bit_value` = '$minus' WHERE `bitcoin`.`customer_code` = '$idUs' and `bit_coin`='$coin_name'";
    mysqli_query($link, $sql);
    
}