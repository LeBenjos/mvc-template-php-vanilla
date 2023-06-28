<?php 

namespace Controller;

abstract class Controller{
    public array $styles = [];
    public array $scripts = [];

    
    protected function updateStyles(array $styles): void{
        $this->styles = $styles;
    }

    protected function updateScripts(array $scripts): void{
        $this->scripts = $scripts;
    }
    
    protected function render(string $view, array $styles, array $scripts, array $data): void{
        $header = $this->captureOutput('template', 'header.php', $data);
        $footer = $this->captureOutput('template', 'footer.php', $data);
        $content = $this->captureOutput('content', $view, $data);

        require_once __ROOT_DIR__ . "/src/view/view.php";
    }

    private function captureOutput(string $way, string $file, ?array $data = null): string{
        ob_start();
        require_once sprintf('%s/src/view/%s/%s', __ROOT_DIR__, $way, $file);
        return ob_get_clean(); 
    }
}
