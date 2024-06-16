<?php
session_start();
require '../session/connect.php';
if(isset($_SESSION['auth']) and !empty($_POST['coin_name']) and !empty($_POST['coin_count']) and 
!empty($_POST['coin_plochadka']) and !empty($_POST['bank_name']) and !empty($_POST['bank_count']) and 
!empty($_POST['bank_kurs']) and !empty($_POST['customers_tel']) and !empty($_POST['customers_fio']) and 
!empty($_POST['customers_email'])){
$coin_name = $_POST['coin_name'];
$coin_count = $_POST['coin_count'];
$coin_plochadka = $_POST['coin_plochadka'];
$bank_name = $_POST['bank_name'];
$bank_count = $_POST['bank_count'];
$bank_kurs = $_POST['bank_kurs'];
$customers_tel = $_POST['customers_tel'];
$customers_fio = $_POST['customers_fio'];
$customers_email = $_POST['customers_email'];
$id = $_SESSION['user']['id'];
$zayvka = "INSERT INTO `applications`(`applications_id`, `customer_code`, `coin_name`, `coin_count`, `coin_plochadka`, `bank_name`, `bank_count`, `bank_kurs`, 
`customers_tel`, `customers_email`, `customer_fio`, `applications_status`) 
VALUES (NULL,'$id','$coin_name','$coin_count','$coin_plochadka','$bank_name','$bank_count','$bank_kurs','$customers_tel',
'$customers_email','$customers_fio', 'Не оплачено')";
mysqli_query($link, $zayvka);
header("Location: http://vkr/lc/lc.php");
};

?>