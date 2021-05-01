<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
  "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html>
    <head>
        <title>Rent-a-Car - Car View</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <meta http-equiv="Content-Type" content="application/xhtml+xml; charset=utf-8" />
        <link type = "text/css" href="/common/styles.css" rel = "stylesheet"/>        
    </head>
    <body>
    <?php
        session_start();
        require 'scripts.php';
    ?>
        <nav class="navbar navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">Rent-A-Car</a>
                <a class="nav-link" href = "cart.php">View Cart</a>
                <a class="nav-link" href="logout.php">Logout</a>
            </div>
        </nav>
        <h1>Choose a Car Type</h1><br>
        <form method = "get">
            <div class="row align-items-center">
                <div class="col">
                    <input type="submit" class="btn btn-primary" name="carType" aria-label="Compact" value = "Compact">
                </div>
                <div class="col">
                    <input type="submit" class="btn btn-primary" name="carType" aria-label="Midside" value = "Midsize">
                </div>
                <div class="col">
                    <input type="submit" class="btn btn-primary" name="carType" aria-label="SUV" value = "SUV">
                </div>
                <div class="col">
                    <input type="submit" class="btn btn-primary" name="carType"aria-label="Luxury" value = "Luxury">
                </div>
            </div>
        </form>
        <br>
        <div id = "displaySection">
        <?php
            if (isset($_GET['carType'])){
                if($_GET['carType']=='Compact'){
                    clickedCompact();
                }
                else if($_GET['carType']=='Midsize'){
                    clickedMid();
                }
                else if($_GET['carType']=='SUV'){
                    clickedSUV();
                }
                else if($_GET['carType']=='Luxury'){
                    clickedLuxury();
                }
            }
        ?>
        </div>
    </body>
</html>