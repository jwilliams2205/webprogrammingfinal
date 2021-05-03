<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
  "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html>
    <head>
        <title>Rent-a-Car - Prepay Parking</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <meta http-equiv="Content-Type" content="application/xhtml+xml; charset=utf-8" />
        <link type = "text/css" href="/common/styles/styles.css" rel = "stylesheet"/>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    </head>
    <body>
        <?php
            session_start();
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
        <div class='card-wrapper'></div>
            <script src="/node_modules/card/dist/card.js"></script>
            <form class="row row-cols-lg-auto g-3 align-items-center" action = 'success.php'>
                <div class="mb-3 w-25 centered">
                <br><br><br>
                <input type="text" name="number" placeholder = "XXXX XXXX XXXX XXXX">
                <input type="text" name="name" placeholder = "Name"/>
                <input type="text" name="expiry" placeholder = "MM/YY"/>
                <input type="text" name="cvc" placeholder = "CVC"/>
                <input type="text" name = "Coupon Code" placeholder = "Coupon Code"/>
                <input type="submit" value = "Submit" class="btn btn-primary">
                </div>
            </form>
            </div>
        <script>

            var card = new Card({
                form: 'form',
                container: '.card-wrapper',

                placeholders: {
                    number: '**** **** **** ****',
                    name: 'John Smith',
                    expiry: '**/****',
                    cvc: '***'
                }
            });
        </script>
    </body>
</html>