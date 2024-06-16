<?php
require './../../session/connect.php';
if(!empty($_POST['idzayvki'])){
    $idzayvki = $_POST['idzayvki'];
    echo $idzayvki;
    $sql2 = "UPDATE `applications` SET `applications_status`='Оплачено' WHERE `applications`.`applications_id`='$idzayvki'";
    mysqli_query($link, $sql2);
    
    // header("Location: http://vkr/lc/lc.php");
}