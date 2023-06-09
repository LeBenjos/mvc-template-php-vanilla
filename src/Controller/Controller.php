<?php 

namespace Controller;

abstract class Controller{
    public array $styles = [];

    protected function updateStyles(array $styles): void{
        $this->styles = $styles;
    }
    
    protected function render(string $view, array $styles, array $data): void{
        ob_start();
        require sprintf('%s/src/view/templates/%s', __ROOT_DIR__, $view);
        $content = ob_get_clean();

        require_once __ROOT_DIR__ . "/src/view/view.php";
    }
}
