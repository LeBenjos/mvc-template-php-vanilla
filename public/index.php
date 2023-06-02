<?php

// Create the router and start it!
require_once '../vendor/autoload.php';
use app\Router;
$router = new Router();
$router->getRequest();