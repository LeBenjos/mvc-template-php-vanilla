<?php

namespace Exception;

class AbstractException extends \Exception{
    public string $viewFile = "exception.php";

    public function __construct(private int $statusCode, private string $customMessage){
        parent::__construct($this->customMessage, $this->statusCode);
    }

    public function setViewFile(string $file): self{
        $this->viewFile = $file;
        return $this;
    }

    public function getViewFile(): string{
        return $this->viewFile;
    }
}