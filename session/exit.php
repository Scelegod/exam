<?php
session_start();
if(!empty($_POST)){
    if($_POST['exit'] === '1'){
        if(isset($_SESSION['auth'])){
            session_destroy();
            header("Location: http://vkr/main/Form.php");
            
        }else if(isset($_SESSION['authDoc'])){
            session_destroy();
            header("Location: http://vkr/main/Form.php");
            
        }else{
            header("Location: http://vkr/main/Form.php");
            
        }
    }
}