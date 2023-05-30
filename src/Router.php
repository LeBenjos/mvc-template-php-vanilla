<?php

namespace Router;

use Controller\TemplateController;

class Router{
    private string $_method;
    private string $_page;
    private $_controller;

    public function __construct(){
        $this->_method = filter_input(INPUT_SERVER, "REQUEST_METHOD");
        $this->_page = filter_input(INPUT_GET, "p") ? filter_input(INPUT_GET, "p") : "template";

        switch($this->_page){
            case "template":
                require_once "../src/controllers/TemplateController.php";
                $this->_controller = new TemplateController($this->_page, $this->_method);
                break;
        }
    }
}