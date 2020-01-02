<?php


$app = new \Slim\App([
    'settings' => [
        'displayErrorDetails' => true,
    ]
]);

$container = $app->getContainer();

$container['db'] = function () {
    return new PDO('mysql:host=localhost;dbname=myslim', 'root', 'password');
};

$container['view'] = function ($container) {
    $view = new \Slim\Views\Twig(__DIR__ . '/../src/views', [
        'cache' => false
    ]);

    $router = $container->get('router');
    $uri = \Slim\Http\Uri::createFromEnvironment(new \Slim\Http\Environment($_SERVER));
    $view->addExtension(new \Slim\Views\TwigExtension($router, $uri));

    return $view;
};

$middleware = function ($request, $response, $next) {
    $response->getBody()->write('Before');
    return $next($request, $response);
};

require __DIR__ . '/../routes/web.php';
