<?php

namespace Router;

use App\Request;
use Router\Route;

// Controllers
use Controller\TemplateController;

class Routes {
    private array $routes = [];

    public function __construct(){
        $this->addRoute(
            (new Route("template", TemplateController::class, "template"))
            ->setTitle("Template Test")
        );
    }

    public function addRoute(Route $route): void{
        array_push($this->routes, $route);
    }

    public function getRoute(Request $request): ?Route{
        foreach ($this->routes as $route){
            if($request->method == $route->getMethod() && $request->url == $route->getUrl()){
                return $route;
            }
        }
        return null;
    }
}
