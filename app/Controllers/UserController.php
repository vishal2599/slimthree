<?php

namespace Vishal\Controllers;

use PDO;
use Vishal\Models\User;

class UserController extends Controller
{
    public function index($request, $response)
    {
        $users = $this->c->db->query('SELECT * FROM users')->fetchAll(PDO::FETCH_CLASS, User::class);

        return $this->c->view->render($response, 'users/index.twig', compact('users'));
    }
}
