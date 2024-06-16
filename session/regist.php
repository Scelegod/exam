<?php
if (!empty($_POST['fio']) and !empty($_POST['pass']) and  !empty($_POST['email'])) {
    $fioreg = $_POST['fio'];
    $passreg = $_POST['pass'];
    $emailreg = $_POST['email'];
    
    $query2 = "INSERT INTO `customers` (customer_id , customer_pass, customer_lname,customer_email) VALUES (NULL, '$passreg', '$fioreg', '$emailreg')";
    mysqli_query($link, $query2);

    $idUs;
    $sql = "SELECT * FROM `customers` WHERE customer_email='$emailreg' AND customer_pass='$passreg'";
    if($result = $link->query($sql)){
        foreach($result as $row){
          $idUs = $row['customer_id'];  
        }
    }
    $query3 = "INSERT INTO `bitcoin`(`bitcoin_id`, `customer_code`, `bit_value`, `bit_coin`) VALUES (null,'$idUs','100','Bitcoin')";
    $query4 = "INSERT INTO `bitcoin`(`bitcoin_id`, `customer_code`, `bit_value`, `bit_coin`) VALUES (null,'$idUs','100','Tether')";
    $query5 = "INSERT INTO `bitcoin`(`bitcoin_id`, `customer_code`, `bit_value`, `bit_coin`) VALUES (null,'$idUs','100','Ethereum')";
    $query6 = "INSERT INTO `bitcoin`(`bitcoin_id`, `customer_code`, `bit_value`, `bit_coin`) VALUES (null,'$idUs','100','Litecoin')";
    mysqli_query($link, $query3);
    mysqli_query($link, $query4);
    mysqli_query($link, $query5);
    mysqli_query($link, $query6);
    $query7 = "INSERT INTO `bank_cus`(`bank_id`, `customer_code`, `bank_name`, `bank_value`) VALUES (NULL,'$idUs','Сбербанк','0')";
    $query8 = "INSERT INTO `bank_cus`(`bank_id`, `customer_code`, `bank_name`, `bank_value`) VALUES (NULL,'$idUs','Тинькофф','0')";
    mysqli_query($link, $query7);
    mysqli_query($link, $query8);
    
    $check_user = mysqli_query($link, "SELECT * FROM `customers` WHERE customer_email='$emailreg' AND customer_pass='$passreg'");
    if(mysqli_num_rows($check_user)> 0){
        $user = mysqli_fetch_assoc($check_user);
        $_SESSION['auth'] = true;
        $_SESSION['user'] = [
            "id" => $user['customer_id'],
            "fio" => $user['customer_lname'],
            "email2" => $user['customer_email'],
        ];
    } 

    header("Location: http://vkr/main/Form.php");
}