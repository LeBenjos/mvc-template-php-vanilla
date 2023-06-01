<?php

namespace src\app;

class Request
{
    public string $_method; // GET, POST...
    public string $_url; // url "p" param
    public array $_headers; // Headers informations
    public array $_queryParams; // GET param
    public array $_rawBody; // POST param

    public function __construct(){
       $this->_method = filter_input(INPUT_SERVER, "REQUEST_METHOD");
       $this->_url = filter_input(INPUT_GET, "p") ? filter_input(INPUT_GET, "p") : "template";
       $this->_headers = $_SERVER;
       $this->_queryParams = $_GET;
       $this->_rawBody = $_POST;
    }
}