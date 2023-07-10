<?php 

namespace src\Controller;

use src\App\Request\Request;
use src\App\Router\Route;

abstract class Controller{
    public function __construct(
        private Request $request,
        private Route $route,
        private array $styles = [],
        private array $scripts = [],
    ){
        $this->request = $request;
        $this->route = $route;
    }
    
    protected function setStyles(array $styles): self{
        $this->styles = $styles;
        return $this;
    }

    protected function setScripts(array $scripts): self{
        $this->scripts = $scripts;
        return $this;
    }

    protected function getStyles(): array{
        return $this->styles;
    }

    protected function getScripts(): array{
        return $this->scripts;
    }

    protected function getRoute(): Route{
        return $this->route;
    }

    protected function getRequest(): Request{
        return $this->request;
    }
    
    protected function render(string $view, array $styles, array $scripts, array $data): void{
        $defaultData = [
            "route" => $this->getRoute(),
            "request" => $this->getRequest()
        ];
        $data = array_merge($defaultData, $data);
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
