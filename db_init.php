<script type="text/javascript">  
    function checkThis(value) {
        console.log(value);
    }
</script>
<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "webprogrammingfinal";

$conn = new mysqli($host, $user, $password);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


// Create db and db tables if they do not exist 
$tables = array(
    "webprogrammingfinal" => "CREATE DATABASE IF NOT EXISTS webprogrammingfinal",

    "users" => "CREATE TABLE IF NOT EXISTS users (
        userID VARCHAR(55) NOT NULL, 
        firstName VARCHAR(255) NOT NULL, 
        lastName VARCHAR(255) NOT NULL, 
        email VARCHAR(255) NOT NULL, 
        pword VARCHAR(255) NOT NULL, 
        userTYPE VARCHAR(255) DEFAULT NULL,
        PRIMARY KEY (userID)
        )",

    "cars" => "CREATE TABLE IF NOT EXISTS cars (
        carType VARCHAR(50) DEFAULT NULL,
        make VARCHAR(50) DEFAULT NULL,
        model VARCHAR(50) DEFAULT NULL,
        inventory INT DEFAULT NULL,
        price INT DEFAULT NULL
        )",

   " parking" =>"CREATE TABLE IF NOT EXISTS parking (
        parkingType VARCHAR(50) DEFAULT NULL,
        cost INT DEFAULT NULL,
        inventory INT NOT NULL
        )"
);


$errors = [];

foreach($tables as $key => $sql) {
    $conns = new mysqli($host, $user, $password, $database);
    $query = @$conns->query($sql);

    if(!$query) {
        $errors[] = "Table $key : Creation Failed ($conns->error)";
    } else {
        $errors[] = "Table $key  : Creation Success";
    }
}

foreach($errors as $msg) {
    echo "<script> checkThis(`$msg`); </script>";
    //echo "$msg <br>";
}

// if ($conn->query($sql) === TRUE) {
//     echo "Table userinfo created successfully";
// } else {
//     echo "Error creating table: " . $conn->error;
// }

$conn->close();
$conns->close();
?>