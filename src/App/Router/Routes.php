<?php

namespace src\App\Router;

use src\App\Request;
use src\App\Router\Route;

class Routes {
    private array $routes = [];

    public function __construct(){
        require_once "../src/Routes/routes.php";
    }

    public function addRoute(Route $route): self{
        array_push($this->routes, $route);
        return $this;
    }

    public function getRoute(string $method, string $url): ?Route{
        foreach ($this->routes as $route){
            if($method == $route->getMethod() && $url == $route->getUrl()){
                return $route;
            }
        }
        return null;
    }
}
