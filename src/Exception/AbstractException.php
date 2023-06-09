<?php

namespace Exception;

class AbstractException extends \Exception{
    public string $viewFile = "exception.php";

    public function __construct(public int $statusCode, public string $customMessage){
        parent::__construct($this->customMessage, $this->statusCode);
    }

    public function getCodeStatus(){
        return $this->statusCode;
    }

    public function getErrorMessage(){
        return $this->customMessage;
    }
}