<?php 

namespace Controller;

use Models\Template;

class TemplateController{

    public function template(){
        require_once "../src/models/TemplateModel.php";
        $template_model = new Template();
        $content = $template_model->getContent();
        require_once "../src/views/TemplateView.php";
    }
    
}