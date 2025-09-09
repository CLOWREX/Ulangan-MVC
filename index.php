<?php
require_once "config.php";
require_once "controllers/PostControllers.php";

$controller = new PostController($conn);

$action = $_GET['action'] ?? 'index';
$id = $_GET['id'] ?? null;

if ($action === 'show' && $id) {
    $controller->show($id);
} else {
    $controller->index();
}
