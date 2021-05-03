<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
  "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html>
    <head>
        <title>Rent-a-Car - Car View</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <meta http-equiv="Content-Type" content="application/xhtml+xml; charset=utf-8" />
        <link type = "text/css" href="/common/styles/styles.css" rel = "stylesheet"/>
        <link type="text/css" href="/common/styles/cars-page.css" rel="stylesheet"/>        
    </head>
    <body>
    <?php
        session_start();
        // require 'scripts.php';
    ?>
        <nav class="navbar navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">Rent-A-Car</a>
                <a class="nav-link" href = "cart.php">View Cart</a>
                <a class="nav-link" href="logout.php">Logout</a>
            </div>
        </nav>
        <h1 class="center-text">Choose a Car Type</h1><br>
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
                /* ****Keeping original code here just in case ***
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
                ***********   */
            ?>
            <!-- Noticed the original version loaded the selections "slowly", probably dude to the css effects
            Code remains on same page, but will default be hidden. Added JS function to toggle on and off displays-->
            <form method = 'post' action = 'addToCart.php'>
                <!-- Compact Cars -->
                <div id="compact" class="container">
                    <div class="car-card">
                        <img src = '/common/carInventory/compact/Toyota_Corolla.jpg'/><br>
                        <h5>Toyota Corolla</h5>
                        <span class="price">$60/day</span><br>
                        <input class='btn btn-primary' type = 'submit' name = 'corolla' value = 'Rent Me!'>
                    </div>
                    <div class="car-card">
                        <img src = '/common/carInventory/compact/Honda_Civic.jpg'/><br>
                        <h5>Honda Civic </h5>
                        <span class="price">$65/day</span><br>
                        <input class='btn btn-primary' type = 'submit' name = 'civic' value = 'Rent Me!'>
                    </div>
                    <div class="car-card">
                        <img src = '/common/carInventory/compact/Ford_Fiesta.jpg'/><br>
                        <h5>Ford Fiesta</h5>
                        <span class="price">$65/day</span><br>
                        <input class='btn btn-primary' type = 'submit' name = 'fiesta' value = 'Rent Me!'>
                    </div>  
                    <div class="car-card">
                        <img src = '/common/carInventory/compact/GM_Bolt.jpg'/><br>
                        <h5>GM Bolt</h5>
                        <span class="price">$70/day</span><br>
                        <input class='btn btn-primary' type = 'submit' name = 'bolt' value = 'Rent Me!'>
                    </div>
                </div>
                <!-- Midsize Cars -->
                <div id="midsize" class="container">
                    <div class="car-card">
                        <img src = '/common/carInventory/midsize/Ford_Fusion.jpg'/><br>
                        <h5>Ford Fusion</h5>
                        <span class="price"> $90/day</span><br>
                        <input class='btn btn-primary' type = 'submit' name = 'fusion' value = 'Rent Me!'>
                    </div>
                    <div class="car-card">
                        <img src = '/common/carInventory/midsize/Toyota_Camry.jpg'/><br>
                        <h5>Toyota Camry</h5>
                        <span class="price"> $100/day</span><br>
                        <input class='btn btn-primary' type = 'submit' name = 'camry' value = 'Rent Me!'>
                    </div>
                    <div class="car-card">
                        <img src = '/common/carInventory/midsize/Hyundai_Sonata.jpg'/><br>
                        <h5>Hyundai Sonata</h5>
                        <span class="price"> $100/day</span><br>
                        <input class='btn btn-primary' type = 'submit' name = 'sonata' value = 'Rent Me!'>
                    </div>
                    <div class="car-card">
                        <img src = '/common/carInventory/midsize/Honda_Accord.jpg'/><br>
                        <h5>Honda Accord</h5>
                        <span class="price"> $105/day</span><br>
                        <input class='btn btn-primary' type = 'submit' name = 'accord' value = 'Rent Me!'>
                    </div>
                </div>
                <!-- SUVs -->
                <div id="suv" class="container">
                    <div class="car-card">    
                        <img src = '/common/carInventory/SUV/Honda_CRV.jpg'/><br>
                        <h5>Honda CRV</h5>
                        <span class="price"> $125/day </span><br>
                        <input class='btn btn-primary' type = 'submit' name = 'crv' value = 'Rent Me!'>
                    </div>
                    <div class="car-card">
                        <img src = '/common/carInventory/SUV/Ford_Explorer.jpg'/><br>
                        <h5>Ford Explorer</h5>
                        <span class="price"> $125/day </span><br>
                        <input class='btn btn-primary' type = 'submit' name = 'explorer' value = 'Rent Me!'>
                    </div>
                    <div class="car-card">    
                        <img src = '/common/carInventory/SUV/Toyota_RAV4.jpg'/><br>
                        <h5>Toyota RAV4</h5>
                        <span class="price"> 125$/day</span><br>
                        <input class='btn btn-primary' type = 'submit' name = 'rav4' value = 'Rent Me!'>
                    </div>
                    <div class="car-card"> 
                        <img src = '/common/carInventory/SUV/GMC_Hummer_EV.jpg'/><br>
                        <h5>GMC Hummer</h5>
                        <span class="price"> $200/day </span><br>
                        <input class='btn btn-primary' type = 'submit' name = 'hummer' value = 'Rent Me!'>
                    </div>
                </div>
                <!-- Luxury -->
                <div id="luxury" class="container">
                    <div class="car-card">
                        <img src = '/common/carInventory/luxury/Ford_MT.jpg'/><br>
                        <h5>Ford Model T</h5>
                        <span class="price"> $1000/day</span><br>
                        <input class='btn btn-primary' type = 'submit' name = 'mt' value = 'Rent Me!'>
                    </div>
                    <div class="car-card">    
                        <img src = '/common/carInventory/luxury/McLaren_F1.jpg'/><br>
                        <h5>McClaren F1</h5>
                        <span class="price"> $1000/day</span><br>
                        <input class='btn btn-primary' type = 'submit' name = 'mf1' value = 'Rent Me!'>
                    </div>
                    <div class="car-card">    
                        <img src = '/common/carInventory/luxury/RR_Ghost.jpg'/><br>
                        <h5>Rolls Royce Ghost</h5>
                        <span class="price"> $1000/day</span><br>
                        <input class='btn btn-primary' type = 'submit' name = 'ghost' value = 'Rent Me!'>
                    </div>
                </div>
            </form>
            <script src="cars-page.js" type="text/javascript"></script>
            <?php
                if (isset($_GET['carType'])){
                    $type = strtolower($_GET['carType']);
                    //echo $type;
                    echo "<script> showType(`$type`);</script>";
                }
            ?>
            <!-- ****************** -->
        </div>
    </body>
</html>