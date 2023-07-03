<?php 

namespace Service;

use Repository\TemplateRepository;

class TemplateService{
    private TemplateRepository $templateRepository;

    public function __construct(){
        $this->templateRepository = new TemplateRepository();
    }

    public function selectContent(){
        return $this->templateRepository->selectAllContent();
    }
}
