<?php

$action = substr(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), 1);

switch ($action) {

    case 'register':
        // code...
        break;

    case 'logout':
        unset($_SESSION['userId']);
        header("location: /display");
        break;

    case 'login':
        if (isset($_POST['username']) && isset($_POST['password'])) {
            include "../models/UserManager.php";
            $userId = GetUserIdFromUserAndPassword($_POST['username'], $_POST['password']);
            if ($userId > 0) {
                $_SESSION['userId'] = $userId;
                header('location:/display');
            } else {
                $errorMsg = "Login or password do not exist !";
                include "../views/LoginForm.php";
            }
        } else {
            include "../views/LoginForm.php";
        }
        break;

    case 'display':
    default:
        include "../views/accueil.html";
        if (isset($_GET['search'])) {
        };

        include "";
        // =============================================================
        break;
}
