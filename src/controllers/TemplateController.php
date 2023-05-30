<?php 

namespace Controller;

use Models\Template;

class TemplateController{

    public function __construct($page, $method){
        
        switch($page){
            case "template":
                switch($method){
                    case "GET":
                        require_once "../src/models/TemplateModel.php";
                        $template_model = new Template();
                        $content = $template_model->getContent();
                        break;
                }
                break;
        }

        require_once "../src/views/TemplateView.php";
    }

}