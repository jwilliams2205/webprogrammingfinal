<?php
require_once 'common/config.php';

    $userName = mysqli_real_escape_string($conn, $_POST['userName']);
    $firstName = mysqli_real_escape_string($conn, $_POST['firstName']);
    $lastName = mysqli_real_escape_string($conn, $_POST['lastName']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $hashword = password_hash($password, PASSWORD_DEFAULT);


    $sql = "INSERT INTO users (userID, firstName, lastName, email, pword)
        VALUES ('$userName','$firstName','$lastName','$email','$hashword')";
    if(mysqli_query($conn,$sql)){
        echo "Records added";
    }
    else{
        echo "Records not added because of " . mysqli_error($conn);
    }
    
    mysqli_close($conn);
    header('Location:login.php');
?>

