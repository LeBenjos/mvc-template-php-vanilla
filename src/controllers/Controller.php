<?php 

namespace controllers;

abstract class Controller{

    protected function updateStyles($styles){
        $this->_styles = $styles;
    }
    
}