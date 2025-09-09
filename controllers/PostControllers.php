<?php
require_once "models/Post.php";

class PostController {
    private $postModel;

    public function __construct($db) {
        $this->postModel = new Post($db);
    }

    public function index() {
        $posts = $this->postModel->getAllPosts();
        require "views/posts/index.php";
    }

    public function show($id) {
        $post = $this->postModel->getPostById($id);
        require "views/posts/show.php";
    }
}