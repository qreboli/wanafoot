<!--<h1>WANAFOOOT MAGGLE</h1>-->
<?php
    switch ($_SERVER["REQUEST_URI"]) {
        case "/home":
            include 'src/home.php';
            break;
        case "/tp":
            include 'tp/index.php';
            break;
        case "/login":
            include "src/Login/login.php";
            break;
        case "/login/register":
            include "src/Login/register.php";
            break;
        case "/login/connection":
            include "src/Login/connection.php";
            break;
        default:
            echo "404 NOT FOUND";
    }
?>
