<?php

namespace Router;

class Route {
    private string $method = "GET";
    private string $url;
    private string $controller;
    private string $controllerMethod;
    public string $middleware;
    public string $title;

    public function __construct(string $url, string $controller, string $controllerMethod){
        $this->url = $url;
        $this->controller = $controller;
        $this->controllerMethod = $controllerMethod;
    }

    public function setMethod(string $method): self{
        $this->method = $method;
        return($this);
    }

    public function setMiddleware(string $middleware): self{
        $this->middleware = $middleware;
        return($this);
    }

    public function setTitle(string $title): self{
        $this->title = $title;
        return($this);
    }

    public function getMethod(): string{
        return $this->method;
    }

    public function getUrl(): string{
        return $this->url;
    }

    public function getController(): string{
        return $this->controller;
    }

    public function getControllerMethod(): string{
        return $this->controllerMethod;
    }

    public function getMiddleware():string{
        return $this->middleware;
    }

    public function getTitle(): string{
        return $this->title;
    }
}