<?php 

namespace Controller;
use Controller\Controller;
use App\Request;
use Router\Route;

// Repository
use Repository\TemplateRepository;

class TemplateController extends Controller{
    public Request $request;
    public Route $route;
    public array $styles = [];
    public TemplateRepository $templateRepository;

    public function __construct(){
        $this->templateRepository = new TemplateRepository();
    }

    // Call Models and View for the main page : "/index.php" || "/"
    public function template(Request $request, Route $route): void{
        $this->request = $request;
        $this->route = $route;
        $content = ($this->templateRepository->getContent());
        $this->updateStyles(['template.css']);
        $this->render("TemplateView.php", $content);
    }
}
