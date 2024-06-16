<?php
session_abort();
if(!empty($_SESSION['auth'])){
    $idUs = $_SESSION['user']['id'];
    $sql = "SELECT * FROM `bank_cus` where `customer_code`='$idUs'";
    if($result = $link->query($sql)){
        
        echo '<div class="bank">';
        echo '<table class="tb--bank">';
            echo '<tr class="primal__tr">';
            echo '<td>Банк</td>';
            echo '<td>Валюта</td>';
            echo '</tr>';
        foreach($result as $row){
            echo '<tr>';
            echo '<td class="bank_name">'.$row['bank_name'].'</td>';
            echo '<td class="bank_value">'.$row['bank_value'].'</td>';
            echo '</tr>';
        }
        echo '</table>';
        echo '</div>';
    }
}