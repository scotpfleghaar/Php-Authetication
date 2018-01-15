<?php

class Posts extends Controller {
    public function __construct(){
        //Putting access control in constructor will apply to all posts no matter the situation
        if(!isLoggedIn()){
            redirect('users/login');
        }

        $this->postModel = $this->model('Post');
    }

    public function index(){
        // Get posts
        $posts = $this->postModel->getPosts();

        // Data for post index
        $data = [
            'posts' => $posts
        ];

        $this->view('posts/index', $data);
    }
}