<?php

namespace Controller;

use Controller\Controller;
use Exception\AbstractException;
use Router\Route;

class ExceptionController extends Controller{
    private \Exception $error;

    public function __construct(\Exception $error){
        $this->error = $error;

        switch($error->getCode()){
            case "404":
                $this->error404();
                break;
        }
    }

    public function error404(): void{
        $this->updateStyles(['exception.css']);
        
        $this->render($this->error->getViewFile(),  $this->styles ,[
            "route" => (new Route())->setTitle("Error 404"),
            "code" => $this->error->getCode(),
            "message" => $this->error->getMessage(),
        ]);
    }
}