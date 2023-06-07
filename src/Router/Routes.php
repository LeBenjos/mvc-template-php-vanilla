<?php

namespace Router;

use App\Request;
use Router\Route;
use Controller\TemplateController;


class Routes {
    private array $_routes = [];

    public function addRoute($route): void{
        array_push($this->_routes, $route);
    }

    // public function findRoute($request){
    //     foreach ($this->_routes as $route){
    //         if($request->_method == $route->_method && $request->_url == $route->_url){
    //             return $route;
    //         }
    //     }
    //     return null;
    // }

    public function getRoute(Request $request){
        foreach ($this->_routes as $route){
            if($request->_method == $route->getMethod() && $request->_url == $route->getUrl()){
                return $route;
            }
        }
        return ((new Route("template", TemplateController::class, 'error404'))->setTitle("PAGE NOT FOUND"));
    }
}
