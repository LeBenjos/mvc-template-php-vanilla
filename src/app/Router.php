<?php

namespace app;

use app\Request;
use app\Routes;
use controllers\TemplateController;

class Router{
    // private array $_routes;
    private Routes $_routes;
    private ?Route $_route;
    private Request $_request;

    public function __construct(){
        // Get all routes!
        require_once "../src/App/routesetup.php";
        $this->_routes = $routes;
    }

    // Get data related to the page where we are
    public function getRequest(): void{
        $this->_request = new Request;
        $this->_route = $this->_routes->findRoute($this->_request);
        if(!$this->_route){
            http_response_code(404);
            $this->actualCall(TemplateController::class, 'error404');
            exit();
        }
        $this->actualCall($this->_route->_controller, $this->_route->_controllerMethod);
    }

    // Call controller and controller method.
    private function actualCall($controllerClass, $methodName): void{
        $controller = new $controllerClass($this->_request);
        $controller->$methodName();
    }
}