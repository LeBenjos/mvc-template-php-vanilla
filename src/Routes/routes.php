<?php

use src\App\Router\Route;

// MIDDLEWARES

// CONTROLLERS
use src\Controller\TemplateController;

$this
->addRoute(
    (new Route("/home", TemplateController::class, "templateMethod"))
    ->setTitle("Home")
)
->addRoute(
    (new Route("/template", TemplateController::class, "templateMethod"))
    ->setTitle("Template")
);
