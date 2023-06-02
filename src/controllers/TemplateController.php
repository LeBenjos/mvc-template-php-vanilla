<?php 

namespace controllers;

use models\TemplateModel;

class TemplateController{
    public $_request;
    public array $_styles = [];

    public function __construct($request){
        $this->_request = $request;
    }

    // Call Models and View for the main page : "/index.php" || "/"
    public function template(): void{
        $template_model = new TemplateModel();
        $content = $template_model->getContent();
        $this->updateStyles(['template.css']);
        require_once "../src/Views/TemplateView.php";
    }

    // Call View for the error 404 page
    public function error404(): void{
        $content = "error 404 template";
        require_once "../src/Views/TemplateView.php";
    }

    private function updateStyles($styles){
        $this->_styles = $styles;
    }
    
}