<?php 

namespace src\Controller;

use src\Controller\Controller;
use src\App\Request\Request;
use src\App\Router\Route;

class TemplateController extends Controller{

    public function __construct(Request $request, Route $route){
        parent::__construct($request, $route);
    }

    public function templateMethod(): void{
        $this->setStyles([])->setScripts([]);
        
        $this->render("templateContent.php",  $this->getStyles(), $this->getScripts() ,[

        ]);
    }
}