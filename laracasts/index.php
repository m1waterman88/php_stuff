<?php

$database = require 'core/bootstrap.php';


$greeting = "Hello, " . htmlspecialchars($_GET['name']) . "!";


// $router = new Router;
// require 'routes.php';

$uri = trim($_SERVER['REQUEST_URI'], '/');
// require $router->direct($uri);

$router = Router::load('routes.php');
require $router->direct($uri);
