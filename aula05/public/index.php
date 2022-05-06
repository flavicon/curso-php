<?php

ini_set('display_errors', 1);

$url = $_SERVER['REQUEST_URI'];

$rotas = [
  '/' => 'listar',
  '/listar' => 'listar',
  '/novo' => 'add',
];

if (false === isset($rotas[$url])) {
  echo "Página <strong>{$url}</strong> não encontrada";
  exit;
}

include '../src/controlador.php';

$rotas[$url]();
