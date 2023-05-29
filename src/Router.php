<?php

namespace Router;

class Router{
    private string $_method;
    private string $_page;
    private $_controller;

    public function __construct(){
        $this->_method = filter_input(INPUT_SERVER, "REQUEST_METHOD");
        $this->_page = filter_input(INPUT_GET, "p") ? filter_input(INPUT_GET, "p") : "login";

        switch($this->_page){
            
        }
    }
}