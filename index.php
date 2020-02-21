<h1>WANAFOOOT MAGGLE</h1>
<?php
use App\Route\Security;

    switch ($_SERVER["REQUEST_URI"]) {
        case "/login":
            Security::login();
            break;
        default:
            echo "Not found";
    }
?>
