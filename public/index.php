<?php

// Create the router and start it!
require_once '../vendor/autoload.php';
use src\app\Router;
$router = new Router();
$router->getRequest();