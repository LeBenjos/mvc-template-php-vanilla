<?php
use Controller\TemplateController;
require_once "../src/controllers/TemplateController.php";

$routes = [
    ["GET", "template", TemplateController::class, 'template'],
];