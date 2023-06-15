<?php

namespace App;

class Request{
    private string $method; // GET, POST...
    private string $url; // url "p" param
    private array $headers; // Headers informations
    private array $queryParams; // GET param
    private array $rawBody; // POST param

    public function __construct(){
       $this->method = filter_input(INPUT_SERVER, "REQUEST_METHOD");
       $this->url = filter_input(INPUT_GET, "p") ? filter_input(INPUT_GET, "p") : "template";
       $this->headers = $_SERVER;
       $this->queryParams = $_GET;
       $this->rawBody = $_POST;
    }

    public function getMethod(): string{
        return $this->method;
    }

    public function getUrl(): string{
        return $this->url;
    }

    public function getHeaders(): array{
        return $this->headers;
    }

    public function getQueryParams(): array{
        return $this->queryParams;
    }

    public function getRawBody(): array{
        return $this->rawBody;
    }
}
