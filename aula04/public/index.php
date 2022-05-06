<?php

ini_set('display_errors', 1);

$rota = $_SERVER['REQUEST_URI'];

//o uso do "require 'nome_do_arquivo.php' é quando arquivo é extremamente necessario e aplicação não pode funcionar sem ele"
// o uso do "include_once" ou "require_once" é quando você quer garantir que o arquivo vai ser incluido só uma vez

include_once '../src/telas/partes/html_head.php';

if ($rota === '/novo') {
  include_once '../src/telas/cadastro.php';
} else if ($rota === '/listar') {
  include_once '../src/telas/listar.php';
} else {
  include_once '../src/telas/login.php';
}

include_once '../src/telas/partes/html_footer.php';
