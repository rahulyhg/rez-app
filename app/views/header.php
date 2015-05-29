<!doctype html>
<html lang = "en"> 
    <head> 
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>  </title>
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="../../bower_components/bootstrap/dist/css/bootstrap.css" />
        <link rel="stylesheet" href="../styles/main.css">
        <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
    </head>

    <body> 
        <div class="container">
            <div class="navbar-default navbar-fixed-top">
                <div class="navbar-header text-center">
                    <h4> ResLife </h4>
                </div>
            </div>

            <div class="header">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="main.php">Events</a></li>
                    <li class=""><a href="ca_login.php">CA Login</a></li>
                    <li class=""><a href="logout.php">Logout</a></li>
                </ul>
            </div>        
            <?php    
                if (session_status() == PHP_SESSION_NONE) {
                    session_start();
                }

                $_SESSION['callbackURL'] = (isset($_SERVER['HTTPS']) ? "https://" : "http://") . $_SERVER['HTTP_HOST'] .  $_SERVER['REQUEST_URI'];

                if (isset($_SESSION['validUser'])) {
                 
                }
            ?>
        
