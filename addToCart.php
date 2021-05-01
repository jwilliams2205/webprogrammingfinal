<?php
    session_start();
    if(isset($_POST['fiesta'])){
        $_SESSION['cart'] = 'fiesta';
    }
    else if (isset($_POST['bolt'])){
        $_SESSION['cart'] = 'bolt';
    }
    else if (isset($_POST['civic'])){
        $_SESSION['cart'] = 'civic';
    }
    else if (isset($_POST['corolla'])){
        $_SESSION['cart'] = 'corolla';
    }
    else if (isset($_POST['fusion'])){
        $_SESSION['cart'] = 'fusion';
    }
    else if (isset($_POST['accord'])){
        $_SESSION['cart'] = 'accord';
    }
    else if (isset($_POST['sonata'])){
        $_SESSION['cart'] = 'sonata';
    }
    else if (isset($_POST['camry'])){
        $_SESSION['cart'] = 'camry';
    }
    else if (isset($_POST['explorer'])){
        $_SESSION['cart'] = 'explorer';
    }
    else if (isset($_POST['hummer'])){
        $_SESSION['cart'] = 'hummer';
    }
    else if (isset($_POST['crv'])){
        $_SESSION['cart'] = 'crv';
    }
    else if (isset($_POST['rav4'])){
        $_SESSION['cart'] = 'rav4';
    }
    else if (isset($_POST['mt'])){
        $_SESSION['cart'] = 'mt';
    }
    else if (isset($_POST['mf1'])){
        $_SESSION['cart'] = 'mf1';
    }
    else if (isset($_POST['ghost'])){
        $_SESSION['cart'] = 'ghost';
    }

    header('Location:parking.php');
?>