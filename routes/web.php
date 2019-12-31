<?php

use Vishal\Models\User;
use Vishal\Controllers\TopicController;
use Vishal\Controllers\UserController;

$app->get('/', function ($request, $response) {
    // $users = $this->db->query('SELECT * FROM users')->fetchAll(PDO::FETCH_OBJ);
    // echo '<pre>';
    // var_dump($users);

    $user = new User;

    var_dump($user);
})->setName('home');

$app->get('/users/{username}', function ($request, $response, $args) {
    $user = $this->db->prepare("SELECT * FROM users WHERE name = :username");

    $user->execute([
        'username' => $args['username']
    ]);

    $data = $user->fetch(PDO::FETCH_OBJ);

    return $this->view->render($response, 'users/profile.twig', compact('data'));
});


$app->get('/contact', function ($request, $response) {
    return $this->view->render($response, 'contact.twig');
})->setName('contact');

$app->post('/contact/confirm', function ($request, $response) {
    return $this->view->render($response, 'contact_confirm.twig');
})->setName('contact.confirm');

$app->group('/topics', function () {
    // $this->get('', '\Vishal\Controllers\TopicController:index');

    $this->get('', TopicController::class . ':index');

    $this->get('/{id}', TopicController::class . ':show')->setName('topics.show');

    $this->post('', function () {
        echo "Post LisT";
    });
});

$app->get('/usr', UserController::class . ':index');
