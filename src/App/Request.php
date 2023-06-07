<?php

namespace App;

class Request
{
    public string $method; // GET, POST...
    public string $url; // url "p" param
    public array $headers; // Headers informations
    public array $queryParams; // GET param
    public array $rawBody; // POST param

    public function __construct(){
       $this->method = filter_input(INPUT_SERVER, "REQUEST_METHOD");
       $this->url = filter_input(INPUT_GET, "p") ? filter_input(INPUT_GET, "p") : "template";
       $this->headers = $_SERVER;
       $this->queryParams = $_GET;
       $this->rawBody = $_POST;
    }
}
