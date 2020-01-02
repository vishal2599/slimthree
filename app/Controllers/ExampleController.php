<?php

namespace Vishal\Controllers;

class ExampleController extends Controller
{
    public function redirect($request, $response)
    {
        return $response->withRedirect($this->c->router->pathFor('landing'));
    }

    public function landing($request, $response)
    {
        return 'to here';
        // return $response->withRedirect($this->c->router->pathFor('landing'));
    }
}
