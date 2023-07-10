<?php 

namespace src\App\Router;

# App
use src\App\Request\Request;
use src\App\Router\Routes;
use src\App\Router\Route;

use src\Controller\ExceptionController;
use \Exception;

class Router{
    private readonly Routes $routes;

    public function __construct(
        public Request $request,
    ){
        $this->routes = new Routes();
    }

    public function resolve(): Route|\Exception{
        $route = $this->routes->getRoute($this->request->getMethod(), $this->request->getUrl());
        if(!$route){
            return new \Exception('Page not found', 404);
        } 

        return $route;
    }

    public function build(Route|\Exception $route){
        if ($route instanceof Route){
            $controller = new ($route->getController())($this->request, $route);
            $methodName = $route->getControllerMethod();
            $controller->$methodName();
        } elseif ($route instanceof \Exception){
            $controller = new ExceptionController($this->request, new Route("/" . $route->getCode(), ExceptionController::class, "error" . $route->getCode()), $route);
            $methodName = "error" . $route->getCode();
            $controller->$methodName();
        }
    }

}
