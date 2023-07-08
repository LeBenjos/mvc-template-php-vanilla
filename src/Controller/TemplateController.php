<?php 

namespace src\Controller;

use src\Controller\Controller;
use src\App\Request\Request;
use src\App\Router\Route;

class TemplateController extends Controller{
    // public TemplateService $templateService;

    // public function __construct(){
    //     $this->templateService = new TemplateService();
    // }

    // Call Models and View for the main page : "/index.php" || "/"
    public function templateMethod(Request $request, Route $route): void{
        $this->updateStyles(['template.css']);
        $this->updateScripts(['template.js']);

        // $content = $this->templateService->selectContent();
        
        $this->render("templateContent.php",  $this->styles, $this->scripts ,[
            "route" => $route,
            "request" => $request
        ]);
    }
}