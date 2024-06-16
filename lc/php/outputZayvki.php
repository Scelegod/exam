<?php
session_start();
    if (!empty($_SESSION['auth'])) {
        $idUs = $_SESSION['user']['id'];
        // echo $idUs;
        $sql = "SELECT * FROM `applications` where `customer_code`='$idUs' and `applications_status`!='Закрыто'";
        if($result = $link->query($sql)){
            echo '<table class="tb--zayvki">';
            echo '<tr class="primal__tr">';
            echo '<td>Номер заявки</td>';
            echo '<td>coin_name</td>';
            echo '<td>coin_count</td>';
            echo '<td>coin_plochadka</td>';
            echo '<td>bank_name</td>';
            echo '<td>bank_count</td>';
            echo '<td>bank_kurs</td>';
            echo '<td>Статус заявки</td>';
            echo '</tr>';
            foreach($result as $row){
                echo '<tr class="tr--zv">';
                echo '<td class="zayvki--id">'.$row['applications_id'].'</td>';
                echo '<td class="zayvki--coin_name">'.$row['coin_name'].'</td>';
                echo '<td class="zayvki--coin_count">'.$row['coin_count'].'</td>';
                echo '<td class="zayvki--coin_plochadka">'.$row['coin_plochadka'].'</td>';
                echo '<td class="zayvki--bank_name">'.$row['bank_name'].'</td>';
                echo '<td class="zayvki--bank_count">'.$row['bank_count'].'</td>';
                echo '<td class="zayvki--bank_kurs">'.$row['bank_kurs'].'</td>';
                echo '<td>
                <form method="POST" data-formid="'.$row['applications_id'].'" class="zayForm" onsubmit="return false" >
                <input type="text" class="bank_name_inp dispnone" value="'.$row['bank_name'].'" name="bank_name">
                <input type="text" class="bank_count dispnone" value="'.$row['bank_count'].'" name="bank_count">
                <input type="text" class="bit_value_inp dispnone" value="'.$row['coin_name'].'" name="bit_value">
                <input type="text" class="bit_coin_inp dispnone" value="'.$row['coin_count'].'" name="bit_coin">
                <button class="zayvki--applications_status" type="submit">'.$row['applications_status'].'</button>
                <input type="text" class="dispnone" value="'.$row['applications_id'].'" name="idzayvki">
                </form>
                </td>';
                echo '</tr>';

            }
            echo '</table>';
        }
        // echo '<button class="avt" onclick="location=`../lc/lc.php`" style="cursor:pointer;">';
    //    echo '<div class="main__info__user">';
    //    echo '<div class="main__info__user__name">' . $_SESSION['user']['fio'] . '</div>';
    //    echo '</div>';
    //    echo '</button>';
      
   }else{
   }