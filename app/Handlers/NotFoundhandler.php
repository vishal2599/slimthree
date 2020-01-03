<?php

namespace Vishal\Handlers;

use Slim\Handlers\AbstractHandler;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;

class NotFoundHandler extends AbstractHandler
{
    public function __invoke(ServerRequestInterface $request, ResponseInterface $response)
    {
        echo 'abc';
        die();
    }
}
