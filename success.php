<?php

    require_once 'common/config.php';
    session_start();
    $carCart = $_SESSION['cart'];
    $carQuery = "SELECT inventory FROM cars WHERE model = '$carCart'";
    $carResult = mysqli_query($conn,$carQuery);
    $carRow = mysqli_fetch_array($carResult);
    $carInventory = $carRow['inventory'];
    $carInventory--;
    $carQuery = "UPDATE cars SET inventory = '$carInventory' WHERE model = '$carCart'";
    if (mysqli_query($conn, $carQuery)) {
        echo "Updated Car Inventory";
      } else {
        echo "Error updating record: " . mysqli_error($conn);
      }

    $parkingType = $_SESSION['parkingType'];
    $parkQuery = "SELECT inventory FROM parking WHERE parkingType = '$parkingType'";
    $parkResult = mysqli_query($conn,$parkQuery);
    $parkRow = mysqli_fetch_array($parkResult);
    $parkInventory = $parkRow['inventory'];
    $parkInventory--;
    $parkQuery = "UPDATE parking SET inventory = '$parkInventory' WHERE parkingType = '$parkingType'";
    if (mysqli_query($conn, $parkQuery)) {
        echo "Updated Parking";
      } else {
        echo "Error updating record: " . mysqli_error($conn);
      }
    echo "<script>alert('Thank you for your purchase!');</script>";
?>
<button onClick = "document.location.href='cars.php'" class = 'btn btn-primary'>Go Back</button>