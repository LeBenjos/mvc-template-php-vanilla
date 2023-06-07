<?php

namespace Middleware;

use App\Request;

interface Middleware {
    public function __invoke(Request $request, callable $next);
}

class MiddlewareTest implements Middleware
{
    public function __construct(private readonly array $markets = ["can", "esp", "fra", "usa"]){}

    public function __invoke(Request $request, ?callable $next): void
    {
        $market = $request->_headers["market"];
        if (!$market) {
            throw new \Exception("400");
        }

        if (!in_array($market, $this->markets)) {
            throw new \Exception("400");
        }

        if ($next !== null) {
            $next();
        }
    }
}

$frMiddleware = new MiddlewareTest(["fra"]);
$marketsMiddleware = new MiddlewareTest();

$frMiddleware(new Request(), null);
