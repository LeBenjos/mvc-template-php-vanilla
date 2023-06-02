<?php

namespace app;

use app\Request;
use controllers\TemplateController;

class Router{
    private array $_routes;
    private Request $_request;

    public function __construct(){
        // Get all routes!
        require_once "../src/App/routes.php";
        $this->_routes = $routes;
    }

    // Get data related to the page where we are
    public function getRequest(): void{
        $this->_request = new Request;
        $foundRoute = $this->findRoute();
        if(!$foundRoute){
            http_response_code(404);
            $controller = new TemplateController($this->_request);
            $controller->error404();
            exit();
        }
        $this->actualCall($foundRoute[2], $foundRoute[3]);
    }

    // Find and get a route if it exists.
    private function findRoute(): ?array{
        foreach($this->_routes as $_route){
            if($_route[0] == $this->_request->_method && $_route[1] == $this->_request->_url){
                return $_route;
            }
        }
        return null;
    }

    // Call controller and controller method.
    private function actualCall($controllerClass, $methodName): void{
        $controller = new $controllerClass($this->_request);
        $controller->$methodName();
    }

}