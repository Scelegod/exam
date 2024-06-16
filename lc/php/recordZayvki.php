<?php
session_start();
    if (!empty($_SESSION['auth'])) {
        // $idUs = $_SESSION['user']['id'];
        // echo $idUs;
        $pribBitTin = 0;
        $poteriBitTin = 0;

        $pribBitSb = 0;
        $poteriBitSb = 0;

        $pribEthTin = 0;
        $poteriEthTin = 0;

        $pribEthSb = 0;
        $poteriEthSb = 0;

        $pribTetTin = 0;
        $poteriTetTin = 0;

        $pribTetSb = 0;
        $poteriTetSb = 0;

        $pribLitTin = 0;
        $poteriLitTin = 0;

        $pribLitSb = 0;
        $poteriLitSb = 0;

        echo '<table>';
        echo '<tr>';
        echo '<td>Прибыль</td>';
        echo '<td>Площадка</td>';
        echo '<td>Потеря</td>';
        echo '<td>Банк</td>';
        echo '</tr>';
        $sql = "SELECT * FROM `applications` where `coin_name`='Bitcoin' and `bank_name`='Тинькофф' and `applications_status`='Оплачено'";
        if($result = $link->query($sql)){
            foreach($result as $row){
                $pribBitTin += (float)$row['coin_count'];
                $poteriBitTin -= (float)$row['bank_count'];
            }
        }
        $sql2 = "SELECT * FROM `applications` where `coin_name`='Bitcoin' and `bank_name`='Сбербанк' and `applications_status`='Оплачено'";
        if($result = $link->query($sql2)){
            foreach($result as $row){
                $pribBitSb += (float)$row['coin_count'];
                $poteriBitSb -= (float)$row['bank_count'];
            }
        }
        $sql3 = "SELECT * FROM `applications` where `coin_name`='Ethereum' and `bank_name`='Тинькофф' and `applications_status`='Оплачено'";
        if($result = $link->query($sql3)){
            foreach($result as $row){
                $pribEthTin += (float)$row['coin_count'];
                $poteriEthTin -= (float)$row['bank_count'];
            }
        }
        $sql4 = "SELECT * FROM `applications` where `coin_name`='Ethereum' and `bank_name`='Сбербанк' and `applications_status`='Оплачено'";
        if($result = $link->query($sql4)){
            foreach($result as $row){
                $pribEthSb += (float)$row['coin_count'];
                $poteriEthSb -= (float)$row['bank_count'];
            }
        }
        $sql5 = "SELECT * FROM `applications` where `coin_name`='Tether' and `bank_name`='Тинькофф' and `applications_status`='Оплачено'";
        if($result = $link->query($sql5)){
            foreach($result as $row){
                $pribTetTin += (float)$row['coin_count'];
                $poteriTetTin -= (float)$row['bank_count'];
            }
        }
        $sql6 = "SELECT * FROM `applications` where `coin_name`='Tether' and `bank_name`='Сбербанк' and `applications_status`='Оплачено'";
        if($result = $link->query($sql6)){
            foreach($result as $row){
                $pribTetSb += (float)$row['coin_count'];
                $poteriTetSb -= (float)$row['bank_count'];
            }
        }
        $sql7 = "SELECT * FROM `applications` where `coin_name`='Litecoin' and `bank_name`='Тинькофф' and `applications_status`='Оплачено'";
        if($result = $link->query($sql7)){
            foreach($result as $row){
                $pribLitTin += (float)$row['coin_count'];
                $poteriLitTin -= (float)$row['bank_count'];
            }
        }
        $sql8 = "SELECT * FROM `applications` where `coin_name`='Litecoin' and `bank_name`='Сбербанк' and `applications_status`='Оплачено'";
        if($result = $link->query($sql8)){
            foreach($result as $row){
                $pribLitSb += (float)$row['coin_count'];
                $poteriLitSb -= (float)$row['bank_count'];
            }
        }
        echo '<tr>';
        echo '<td>'.$pribBitTin.'</td>';
        echo '<td>Bitcoin</td>';
        echo '<td>'.$poteriBitTin.'</td>';
        echo '<td>Тинькофф</td>';
        echo '</tr>';

        echo '<tr>';
        echo '<td>'.$pribBitSb.'</td>';
        echo '<td>Bitcoin</td>';
        echo '<td>'.$poteriBitSb.'</td>';
        echo '<td>Сбербанк</td>';
        echo '</tr>';

        echo '<tr>';
        echo '<td>'.$pribEthTin.'</td>';
        echo '<td>Ethereum</td>';
        echo '<td>'.$poteriEthTin.'</td>';
        echo '<td>Тинькофф</td>';
        echo '</tr>';

        echo '<tr>';
        echo '<td>'.$pribEthSb.'</td>';
        echo '<td>Ethereum</td>';
        echo '<td>'.$poteriEthSb.'</td>';
        echo '<td>Сбербанк</td>';
        echo '</tr>';

        echo '<tr>';
        echo '<td>'.$pribTetTin.'</td>';
        echo '<td>Tether</td>';
        echo '<td>'.$poteriTetTin.'</td>';
        echo '<td>Тинькофф</td>';
        echo '</tr>';

        echo '<tr>';
        echo '<td>'.$pribTetSb.'</td>';
        echo '<td>Tether</td>';
        echo '<td>'.$poteriTetSb.'</td>';
        echo '<td>Сбербанк</td>';
        echo '</tr>';

        echo '<tr>';
        echo '<td>'.$pribLitTin.'</td>';
        echo '<td>Litecoin</td>';
        echo '<td>'.$poteriLitTin.'</td>';
        echo '<td>Тинькофф</td>';
        echo '</tr>';

        echo '<tr>';
        echo '<td>'.$pribLitSb.'</td>';
        echo '<td>Litecoin</td>';
        echo '<td>'.$poteriLitSb.'</td>';
        echo '<td>Сбербанк</td>';
        echo '</tr>';

        echo '<tr>';
        echo '<td>'.(float)$pribBitTin + (float)$pribBitSb+ (float)$pribEthTin + (float)$pribEthSb + (float)$pribTetTin + (float)$pribTetSb+ (float)$pribLitTin+ (float)$pribLitSb  .'</td>';
        echo '<td>Общее</td>';
        echo '<td>'.(float)$poteriBitTin + (float)$poteriBitSb+ (float)$poteriEthTin + (float)$poteriEthSb + (float)$poteriTetTin + (float)$poteriTetSb+ (float)$poteriLitTin+ (float)$poteriLitSb  .'</td>';
        echo '<td>Общее</td>';
        echo '</tr>';

        echo '</table>';
   }else{
   }