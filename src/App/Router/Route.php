<?php

namespace src\App\Router;

use src\Middleware\Middleware;

class Route {
    private string $method = "GET";
    private array $middleware = [];
    private string $title = "";

    public function __construct(
        private string $url,
        private string $controller,
        private string $controllerMethod
    ){
        $this->url = $url;
        $this->controller = $controller;
        $this->controllerMethod = $controllerMethod;
    }

    // SETTERS
    public function setMethod(string $method): self{
        $this->method = $method;
        return $this;
    }

    public function setMiddleware(Middleware $middleware): self{
        array_push($this->middleware, $middleware);
        return $this;
    }

    public function setTitle(string $title): self{
        $this->title = $title;
        return $this;
    }

    // GETTERS
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
