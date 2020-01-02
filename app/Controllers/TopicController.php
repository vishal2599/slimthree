<?php

namespace Vishal\Controllers;

use PDO;
use Vishal\Models\Topic;

class TopicController extends Controller
{

    // public function index($request, $response)
    // {
    //     $topics = $this->c->db->query('SELECT * FROM topics')->fetchAll(PDO::FETCH_OBJ);
    //     return $this->c->view->render($response, 'topics/index.twig', compact('topics'));
    // }

    public function show($request, $response, $args)
    {
        // echo $request->getAttribute('token');
        // die();
        // $topic = $this->c->db->prepare('SELECT * FROM topics WHERE id=:id');
        // $topic->execute([
        //     'id' => $args['id']
        // ]);
        // $topic = $topic->fetch(PDO::FETCH_OBJ);

        // if ($topic === false) {
        //     return $this->c->view->render($response->withStatus(404), 'errors/404.twig');
        // }
        // return $this->c->view->render($response, 'topics/show.twig', compact('topic'));
        return $args['id'];
    }

    public function modelIndex($request, $response, $args)
    {
        // $topics = $this->c->db->query('SELECT * FROM topics')->fetchAll(PDO::FETCH_CLASS, Topic::class);

        // return $this->c->view->render($response, 'topics/index.twig', compact('topics'));

        return "Topic Index";
    }
}
