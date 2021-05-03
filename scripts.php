<?php
    // include 'common/styles/cars-page.css';
    // include 'common/styles.css';

    function clickedCompact(){
        echo <<<EOT
            <form method = 'post' action = 'addToCart.php'>
                <div class="container">
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
            </form>
        EOT;
    }

    function clickedMid(){
        echo <<<EOT
            <form method = 'post' action = 'addToCart.php'>
                <div class="container">
                    <div class="car-card">
                        <img src = '/common/carInventory/midsize/Ford_Fusion.jpg'/><br>
                        <h5>Ford Fusion</h5>
                        <span class="price"> $90/day</span><br>
                        <input class='btn btn-primary' type = 'submit' name = 'fusion' value = 'Rent Me!'>
                    </div>
                    <div class="car-card">
                        <img src = '/common/carInventory/midsize/Honda_Accord.jpg'/><br>
                        <h5>Honda Accord</h5>
                        <span class="price"> $105/day</span><br>
                        <input class='btn btn-primary' type = 'submit' name = 'accord' value = 'Rent Me!'>
                    </div>
                    <div class="car-card">
                        <img src = '/common/carInventory/midsize/Hyundai_Sonata.jpg'/><br>
                        <h5>Hyundai Sonata</h5>
                        <span class="price"> $100/day</span><br>
                        <input class='btn btn-primary' type = 'submit' name = 'sonata' value = 'Rent Me!'>
                    </div>
                    <div class="car-card">
                        <img src = '/common/carInventory/midsize/Toyota_Camry.jpg'/><br>
                        <h5>Toyota Camry</h5>
                        <span class="price"> $100/day</span><br>
                        <input class='btn btn-primary' type = 'submit' name = 'camry' value = 'Rent Me!'>
                    </div>
                </div>
            </form>
        EOT;
    }

    function clickedSUV(){
        echo <<<EOT
            <form method = 'post' action = 'addToCart.php'>
                <div class="container">
                    <div class="car-card">
                        <img src = '/common/carInventory/SUV/Ford_Explorer.jpg'/><br>
                        <h5>Ford Explorer</h5>
                        <span class="price"> $125/day </span><br>
                        <input class='btn btn-primary' type = 'submit' name = 'explorer' value = 'Rent Me!'>
                    </div>
                    <div class="car-card"> 
                        <img src = '/common/carInventory/SUV/GMC_Hummer_EV.jpg'/><br>
                        <h5>GMC Hummer</h5>
                        <span class="price"> $200/day </span><br>
                        <input class='btn btn-primary' type = 'submit' name = 'hummer' value = 'Rent Me!'>
                    </div>
                    <div class="car-card">    
                        <img src = '/common/carInventory/SUV/Honda_CRV.jpg'/><br>
                        <h5>Honda CRV</h5>
                        <span class="price"> $125/day </span><br>
                        <input class='btn btn-primary' type = 'submit' name = 'crv' value = 'Rent Me!'>
                    </div>
                    <div class="car-card">    
                        <img src = '/common/carInventory/SUV/Toyota_RAV4.jpg'/><br>
                        <h5>Toyota RAV4</h5>
                        <span class="price"> 125$/day</span><br>
                        <input class='btn btn-primary' type = 'submit' name = 'rav4' value = 'Rent Me!'>
                    </div>
                </div>
            </form>
        EOT;
    }

    function clickedLuxury(){
        echo <<<EOT
            <form method = 'post' action = 'addToCart.php'>
                <div class="container">
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
        EOT;
    }
    ?>