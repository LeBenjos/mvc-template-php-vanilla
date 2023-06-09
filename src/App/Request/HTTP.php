<?php 

namespace src\App\Request;

class HTTP implements Request{

    public function __construct(
        private string $method = "",
        private string $url = "",
        private array $headers = [],
        private array $queryParams = [],
        private array $rawBody = [],
    ){
       $this->method = filter_input(INPUT_SERVER, "REQUEST_METHOD");
       $this->url = filter_input(INPUT_GET, "p") ? strtolower(filter_input(INPUT_GET, "p")) : "/home";
       $this->url = $this->checkUrl($this->url);
       $this->headers = $_SERVER;
       $this->queryParams = $_GET;
       $this->rawBody = $_POST;
    }

    // FUNCTIONS
    private function checkUrl($url){
        if($url[0] != "/"){
            return "/" . $url;
        }

        return $url;
    }
    
    //GETTERS
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
