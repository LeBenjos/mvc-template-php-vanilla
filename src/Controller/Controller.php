<?php 

namespace Controller;

abstract class Controller{

    protected function updateStyles($styles){
        $this->_styles = $styles;
    }
    
}
