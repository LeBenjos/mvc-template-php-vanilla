<?php

namespace Exception;

class NotFound extends AbstractException{
    public function __construct(){
        parent::__construct(404, 'Page Not Found');
    }
}