<?php


$host = "localhost";
$user = "root";
$password = "";
$database = "webprogrammingfinal";

$conn = mysqli_connect($host, $user, $password, $database);
if($conn){
    
}
else{
    die("Database connection failed!");
}

?>