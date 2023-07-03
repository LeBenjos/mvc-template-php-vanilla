<?php 

namespace App;

class HTTP implements Request{

    public function __construct(
        public string $method = '',
        public string $url = '',
        public array $headers = [],
        public array $queryParams = [],
        public array $rawBody = [],
    ){
       $this->method = filter_input(INPUT_SERVER, "REQUEST_METHOD");
       $this->url = filter_input(INPUT_GET, "p") ? filter_input(INPUT_GET, "p") : "home";
       $this->headers = $_SERVER;
       $this->queryParams = $_GET;
       $this->rawBody = $_POST;
    }
    
}
