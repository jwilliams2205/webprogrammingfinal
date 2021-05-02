<?php
    session_start();

    if(isset($_GET['parkingType'])){
        if($_GET['parkingType']=='VIP'){
            $_SESSION['parkingType'] = 'VIP';
        }
        else{
            $_SESSION['parkingType'] = 'Standard';
        }
        header('Location:cart.php');
    }
    else{
        echo 'FAILED';
    }
?>