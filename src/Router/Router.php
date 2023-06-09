<?php

namespace Router;

use App\Request;
use Router\Routes;
use Router\Route;

// Exception
use Exception\NotFound;

class Router{
    private Routes $routes;
    private ?Route $route;
    private Request $request;

    public function __construct(){
        $this->routes = new Routes();
    }

    // Get data related to the page where we are
    public function resolve(): void{
        $this->request = new Request();
        $this->route = $this->routes->getRoute($this->request);
        try {
            if (!$this->route){
                throw new NotFound();
            }
            $this->actualCall($this->route->getController(), $this->route->getControllerMethod());
        } catch (\Exception $e) {
            echo($e->getCodeStatus() . ' ' . $e->getErrorMessage());
        }
    }

    // Call controller and controller method.
    private function actualCall(string $controllerClass, string $methodName): void{
        $controller = new $controllerClass();
        $controller->$methodName($this->request, $this->route);
    }
}
