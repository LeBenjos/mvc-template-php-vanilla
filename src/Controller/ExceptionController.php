<?php

namespace Controller;

use Controller\Controller;
use Exception\AbstractException;

class ExceptionController extends Controller{
    public function handle(AbstractException $e)
    {
        http_response_code($e->getCode());
        $this->render(sprintf('excpetions/%s', $e->viewFile), $e->getMessage());
    }
}