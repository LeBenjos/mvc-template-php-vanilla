<?php 

namespace Controller;
use Controller\Controller;
use App\Request;
use Router\Route;

// Repository
use Service\TemplateService;

class TemplateController extends Controller{
    public TemplateService $templateService;

    public function __construct(){
        $this->templateService = new TemplateService();
    }

    // Call Models and View for the main page : "/index.php" || "/"
    public function template(Request $request, Route $route): void{
        $this->updateStyles(['template.css']);

        $content = $this->templateService->selectContent();
        
        $this->render("TemplateView.php",  $this->styles ,[
            "start" => $content,
            "route" => $route,
            "request" => $request
        ]);
    }
}
