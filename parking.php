<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
  "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html>
    <head>
        <title>Rent-a-Car - Prepay Parking</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <meta http-equiv="Content-Type" content="application/xhtml+xml; charset=utf-8" />
        <link type = "text/css" href="/common/styles.css" rel = "stylesheet"/>
    </head>
    <body> 
        <?php
            require_once 'common/config.php';
            session_start();

            $vipQuery = "SELECT inventory FROM parking WHERE parkingType = 'VIP'";
            $vipResult = mysqli_query($conn,$vipQuery);
            $vipRow = mysqli_fetch_array($vipResult);
            $vipInventory = $vipRow['inventory'];
            $stdQuery = "SELECT inventory FROM parking WHERE parkingType = 'Standard'";
            $stdResult = mysqli_query($conn,$stdQuery);
            $stdRow = mysqli_fetch_array($stdResult);
            $stdInventory = $stdRow['inventory'];
        ?>
        <nav class="navbar navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">Rent-A-Car</a>
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                <a class="nav-link" href="signup.php">Signup</a>
                <a class="nav-link" href="login.php">Login</a>
            </div>
        </nav>
        <br>
            <h1>Prepay for your parking here. Select your parking location</h1>

            <form method = "get" action = "parkingSubmit.php">
            <div class="row align-items-center">
                <div class="col">
                    <input type="submit" class="btn btn-primary" name="parkingType" aria-label="Standard" value = "Standard">
                    <br>
                    <p>$25/day, only <?=$stdInventory?> spaces left!</p>
                </div>
                <div class="col">
                    <input type="submit" class="btn btn-primary" name="parkingType" aria-label="VIP" value = "VIP">
                    <br>
                    <p>$50/day, only <?=$vipInventory?> spaces left!</p>
                </div>
            </div>
        </form>
    </body>
</html>