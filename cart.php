<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
  "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html>
    <head>
        <title>Rent-a-Car - View Cart</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <meta http-equiv="Content-Type" content="application/xhtml+xml; charset=utf-8" />
        <link type = "text/css" href="/common/styles/styles.css" rel = "stylesheet"/>
    </head>
    <body>
        <nav class="navbar navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">Rent-A-Car</a>
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                <a class="nav-link" href="signup.php">Signup</a>
                <a class="nav-link" href="login.php">Login</a>
            </div>
        </nav>
        <h1>Cart</h1>
        <?php
            session_start();
            require_once 'common/config.php';
            $carMake;
            $carModel;
            $carPrice;
            $parkingType;
            $parkingPrice;
        if(isset($_SESSION['cart'])){
            $carCart = $_SESSION['cart'];
            $carQuery = "SELECT make,model,price FROM cars WHERE model = '$carCart'";
            $carResult = mysqli_query($conn,$carQuery);
            $carRow = mysqli_fetch_array($carResult);
            $carModel = strtoupper($carRow['model']);
            $carMake = strtoupper($carRow['make']);
            $carPrice = $carRow['price'];
        }

        if(isset($_SESSION['parkingType'])){
            $parkingType = $_SESSION['parkingType'];
            $parkingQuery = "SELECT cost FROM parking where parkingType = '$parkingType'";
            $parkingResult = mysqli_query($conn,$parkingQuery);
            $parkingRow = mysqli_fetch_array($parkingResult);
            $parkingPrice = $parkingRow['cost'];
        }
        $total = $parkingPrice + $carPrice;
        ?>

        <table class="table table-striped table-hover ">
            <tr>
            <td>Car: <?=$carMake . " " . $carModel?></td>
            <td>Price: <?='$'.$carPrice?></td>
            </tr>
            <tr>
            <td>Parking: <?=$parkingType?></td>
            <td>Price: <?='$'.$parkingPrice?><td>
            </tr>
            <tr>
            <td colspan = 2>Total: <?='$'.$total?></td>
            </tr>
        </table>
        <form action = 'checkout.php'>
            <input type="submit" class="btn btn-primary" name="carType"aria-label="Checkout" value = "Checkout">
        </form>
    </body>
</html>