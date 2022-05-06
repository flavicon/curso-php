<?php

function conexao() {
  $host = 'localhost';
  $user = 'alessandro';
  $pass = 'livre';
  $database = 'db_pets';

  return new PDO("mysql:host=$host;dbname=$database; port=3306", $user, $pass);
}

function head() {
  include_once '../views/head.html';
}

function add() {
  if (isset($_POST['nome'])) {
    $nome = $_POST['nome'];
    $sexo = $_POST['sexo'];
    $dataNasc = $_POST['data_nascimento'];
    $endereco = $_POST['endereco'];

    $sql = "INSERT INTO
    tb_tutores (nome, status, endereco, sexo, data_nascimento)
    VALUES (?, ?, ?, ?, ?)";

    conexao()->prepare($sql)->execute([$nome, 1, $endereco, $sexo, $dataNasc]);

    echo '<script>
      alert("Tutor inserido");
      location.href="/listar";
    </script>';
  }

  head();
  include_once '../views/tutor/add.php';
}

function listar() {
  $dados = conexao()->query('SELECT * FROM tb_tutores')->fetchAll();

  head();
  include_once '../views/tutor/listar.php';
}
