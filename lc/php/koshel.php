<?php
session_abort();
if(!empty($_SESSION['auth'])){
    $idUs = $_SESSION['user']['id'];
    $sql = "SELECT * FROM `bitcoin` where `customer_code`='$idUs'";
    if($result = $link->query($sql)){
        
        echo '<div class="koshel">';
        echo '<table class="tb--kosh">';
            echo '<tr class="primal__tr">';
            echo '<td>Криптовалюта</td>';
            echo '<td>Валюта</td>';
            echo '</tr>';
        foreach($result as $row){
            echo '<tr>';
            echo '<td class="cript">'.$row['bit_coin'].'</td>';
            echo '<td class="cript-value">'.$row['bit_value'].'</td>';
            echo '</tr>';
        }
        echo '</table>';
        echo '</div>';
    }
}