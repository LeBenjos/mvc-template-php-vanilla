<?php

namespace Router;

use App\Request;
use Router\Routes;
use Router\Route;

// Controllers
use controllers\TemplateController;

class Router{
    // private array $_routes;
    private Routes $_routes;
    private Route $_route;
    private Request $_request;

    public function __construct(){
        $this->_routes = new Routes();

        $this->_routes->addRoute(
            (new Route("template", TemplateController::class, 'template'))
            ->setTitle("Template Test")
        );

    }

    // Get data related to the page where we are
    public function resolve(): void{
        $this->_request = new Request();
        $this->_route = $this->_routes->getRoute($this->_request);
        // if(!$this->_route){
        //     http_response_code(404);
        //     $this->actualCall(TemplateController::class, 'error404');
        //     exit();
        // }
        $this->actualCall($this->_route->getController(), $this->_route->getControllerMethod());
    }

    // Call controller and controller method.
    private function actualCall(string $controllerClass, string $methodName): void{
        $controller = new $controllerClass($this->_route);
        $controller->$methodName();
    }
}
