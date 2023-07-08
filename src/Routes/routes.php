<?php

use src\App\Router\Route;

// CONTROLLERS
use src\Controller\TemplateController;

$this->addRoute(
    (new Route("/home", TemplateController::class, "templateMethod"))
    ->setTitle("Home")
);
