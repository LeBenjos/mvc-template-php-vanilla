<?php

namespace Router;

use Controller\TemplateController;

class Router{
    private array $_routes;
    private string $_url;
    private string $_methode;

    public function __construct(){
        require_once "../src/app/routes.php";
        $this->_routes = $routes;
    }

    public function decide(){
        $this->_method = filter_input(INPUT_SERVER, "REQUEST_METHOD");
        $this->_url = filter_input(INPUT_GET, "p") ? filter_input(INPUT_GET, "p") : "template";
        $foundRoute = $this->findRoute();
        if(!$foundRoute){
            http_response_code(404);
            exit();
        }
        $this->actualCall($foundRoute[2], $foundRoute[3]);
    }

    private function findRoute() : ?array{
        foreach($this->_routes as $_route){
            if($_route[0] == $this->_method && $_route[1] == $this->_url){
                return $_route;
            }
        }
        return null;
    }

    private function actualCall($controllerClass, $methodName){
        $controller = new $controllerClass();
        $controller->$methodName();
    }

}