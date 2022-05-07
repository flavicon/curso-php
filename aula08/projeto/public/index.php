<?php

ini_set('display_errors', 1);

include '../vendor/autoload.php';

use App\Controller\CategoryController;
use App\Controller\ErrorController;
use App\Controller\IndexController;

$url = $_SERVER['REQUEST_URI'];

match($url) {
    '/' => (new IndexController)->home(),
    '/listar' => (new CategoryController())->list(),
    '/novo' => (new CategoryController())->add(),
    default => (new ErrorController())->notFound(),
};
