<?php
session_start();

require_once("Controllers/Router.php");

$router = new Router();
$router->routeRequest();
