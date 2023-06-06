<?php

namespace app;

class Route {
    public string $_method = "GET";
    public string $_url;
    public $_controller;
    public string $_controllerMethod;
    public $_middleware;
    public string $_title;

    public function __construct($url, $controller, $controllerMethod){
        $this->_url = $url;
        $this->_controller = $controller;
        $this->_controllerMethod = $controllerMethod;
    }

    public function setMethod($method){
        $this->_method = $method;
        return($this);
    }

    public function setMiddleware($middleware){
        $this->_middleware = $middleware;
        return($this);
    }

    public function setTitle($title){
        $this->_title = $title;
        return($this);
    }
}