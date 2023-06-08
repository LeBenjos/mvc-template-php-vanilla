<?php

namespace Router;

use App\Request;
use Router\Routes;
use Router\Route;

// Controllers
use Controller\TemplateController;

class Router{
    private Routes $routes;
    private ?Route $route;
    private Request $request;

    public function __construct(){
        $this->routes = new Routes();

        $this->routes->addRoute(
            (new Route("template", TemplateController::class, "template"))
            ->setTitle("Template Test")
        );

    }

    // Get data related to the page where we are
    public function resolve(): void{
        $this->request = new Request();
        $this->route = $this->routes->getRoute($this->request);
        $this->actualCall($this->route->getController(), $this->route->getControllerMethod());
    }

    // Call controller and controller method.
    private function actualCall(string $controllerClass, string $methodName): void{
        $controller = new $controllerClass();
        $controller->$methodName($this->request, $this->route);
    }
}
