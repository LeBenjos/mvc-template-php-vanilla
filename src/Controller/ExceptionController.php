<?php

namespace src\Controller;

use src\App\Request\Request;
use src\App\Router\Route;
use src\Controller\Controller;
use \Exception;

class ExceptionController extends Controller{
    public function __construct(
        private Request $request,
        private Route $route,
        private \Exception $exception
    ){
        http_response_code($exception->getCode());
        parent::__construct($request, $route);
        $this->route->setTitle("Error " . $exception->getCode());
    }

    public function getException(): \Exception{
        return $this->exception;
    }

    public function error404(): void{
        $this->setStyles([])->setScripts([]);
        
        $this->render("templateException.php",  $this->getStyles(), $this->getScripts() ,[
            "exception" => $this->getException()
        ]);
    }
}



