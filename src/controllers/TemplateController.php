<?php 

namespace controllers;
use controllers\Controller;

// Models
use models\TemplateModel;
use repository\TemplateRepository;

class TemplateController extends Controller{
    public $_request;
    public array $_styles = [];
    public TemplateRepository $_templateRepository;

    public function __construct($request){
        $this->_request = $request;
        $this->_templateRepository = new TemplateRepository();
    }

    // Call Models and View for the main page : "/index.php" || "/"
    public function template(): void{
        $_templateRepository = new TemplateModel();
        $content = $template_model->getContent();
        $this->updateStyles(['template.css']);
        require_once "../src/Views/TemplateView.php";
    }

    // Call View for the error 404 page
    public function error404(): void{
        $content = "error 404 template";
        $this->updateStyles(['template.css']);
        require_once "../src/Views/TemplateView.php";
    }
}
