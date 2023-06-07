<?php 

namespace Controller;

abstract class Controller{

    protected function updateStyles(array $styles): void{
        $this->styles = $styles;
    }
    
    protected function render(string $view, $data): void{
        $content = $data;
        require_once "../src/view/$view";
    }
}
