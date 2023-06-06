<?php

use app\Routes;
use app\Route;

// Controllers
use controllers\TemplateController;

$routes = new Routes();

$routes->addRoute(
    (new Route("template", TemplateController::class, 'template'))
    ->setTitle("test")
);