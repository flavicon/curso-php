<?php

ini_set('display_errors', 1);

include '../src/controller/AbstractController.php';
include '../src/controller/CategoryController.php';
include '../src/controller/ErrorController.php';
include '../src/controller/IndexController.php';

$url = $_SERVER['REQUEST_URI'];

match($url) {
    '/listar' => (new CategoryController())->list(),
    '/novo' => (new CategoryController())->add(),
    '/' => (new IndexController)->home(),
    default => (new ErrorController())->notFound(),
};
