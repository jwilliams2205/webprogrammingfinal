<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
  "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html>
    <head>
        <title>RaC - Sign Up</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <link type = "text/css" rel = "stylesheet" href = "/common/styles.css"/>
        <meta http-equiv="Content-Type" content="application/xhtml+xml; charset=utf-8" />
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
        <div class="p-3 mb-2 bg-dark text-white" id = "fullPage">
        <?php
            session_start();
            if(isset($_SESSION['loginFail'])){
                if($_SESSION['loginFail']){
                    echo '<h2>Incorrect username/password combination, try again.';
                }
                $_SESSION['loginFail'] = FALSE;
            }
        ?>
        <form class="row row-cols-lg-auto g-3 align-items-center" action = "login-submit.php" method = "POST">
            <div class="mb-3 w-25 centered">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Username</span>
                    <input type="text" size = "16" class="form-control"  name = "userName">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Password</span>
                    <input type="password" size = "16" class="form-control" name = "password">
                </div>
                <input type = "submit" value = "Login"/>
            <div>
        </form>
        </div>
    </body>
</html>