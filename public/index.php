<?php

require_once '../vendor/autoload.php';

use src\App\Router\Router;
use src\App\Request\HTTP;

$request = new HTTP();
$router = new Router($request);
$route = $router->resolve();
$router->build($route);
