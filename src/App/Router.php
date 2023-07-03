<?php 

namespace App;

# App
use App\Request;
use App\HTTP;

class Router{

    public function __construct(
        public Request $method,
    ){}

}
