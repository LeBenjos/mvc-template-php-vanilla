<?php

use src\controllers\TemplateController;

/* Define all routes.
* Array explications
* [0] = method
* [1] = url
* [2] = controller
* [3] = function
* [4] = Middleware (optionnal)
*/
$routes = [
    ["GET", "template", TemplateController::class, 'template'],
];