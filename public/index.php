<?php

require_once '../vendor/autoload.php';

use App\Router;
use App\HTTP;

# Réfléchir a ou placer la request soit dans le index.php mais alors c'est toujours une HTTP ?
$request = new HTTP();
$router = new Router($request);
// $route = $router->resolve();
// $router->render($route);
