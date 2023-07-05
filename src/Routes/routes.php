<?php

use src\App\Router\Route;

$this->addRoute(
    (new Route("/home", TemplateController::class, "templateMethod"))
    ->setTitle("Home")
);
