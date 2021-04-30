<?php
    require_once 'common/config.php';
    session_start();

    $userName = mysqli_real_escape_string($conn, $_POST['userName']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $sql = "SELECT userID, pword FROM users WHERE userID = '$userName'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result);

    if($row['userID'] == $userName){
        $_SESSION['loggedUser'] = $userName;
        echo "User Found!";
        if(password_verify($password,$row['pword'])){
            header('Location:cars.php');
        }
        else{
            echo $row['pword'];
            $_SESSION['loginFail'] = TRUE;
            echo "User Not Found!";
            header('Location:login.php');
            echo $userName. " " . $password;
        }
    }
    else{
        $_SESSION['loginFail'] = TRUE;
        echo "User Not Found!";
        header('Location:login.php');
        echo $userName. " " . $password;
    }

    mysqli_close($conn);
    header('login.php');
?>
