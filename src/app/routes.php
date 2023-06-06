<?php

namespace app;

class Routes {
    private array $_routes = [];

    public function addRoute($route){
        array_push($this->_routes, $route);
    }

    public function findRoute($request){
        foreach ($this->_routes as $route){
            if($request->_method == $route->_method && $request->_url == $route->_url){
                return $route;
            }
        }
        return null;
    }
}