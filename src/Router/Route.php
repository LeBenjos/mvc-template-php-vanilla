<?php

namespace Router;

class Route {
    private string $_method = "GET";
    private string $_url;
    private $_controller;
    private string $_controllerMethod;
    private $_middleware;
    private string $_title;

    public function __construct($url, $controller, $controllerMethod){
        $this->_url = $url;
        $this->_controller = $controller;
        $this->_controllerMethod = $controllerMethod;
    }

    public function setMethod(string $method): self{
        $this->_method = $method;
        return($this);
    }

    public function setMiddleware($middleware): self{
        $this->_middleware = $middleware;
        return($this);
    }

    public function setTitle(string $title): self{
        $this->_title = $title;
        return($this);
    }

    public function getMethod(): string{
        return $this->_method;
    }

    public function getUrl(): string{
        return $this->_url;
    }

    public function getController(){
        return $this->_controller;
    }

    public function getControllerMethod(): string{
        return $this->_controllerMethod;
    }

    public function getMiddleware(){
        return $this->_middleware;
    }

    public function getTitle(): string{
        return $this->_title;
    }
}

// TYPEZ LES varibiable
// typer les retour et les paramètre ":self"
// Model = Repository
// Créer une branch public git pour des retours
// git checkout -b 'decoupage-code'
