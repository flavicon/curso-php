<?php

include 'entidades/Aluno.php';
include 'entidades/Disciplina.php';
include 'entidades/Curso.php';
include 'entidades/Grade.php';

$a1 = new Aluno('Alessandro', '123.123.123-12'); //construindo uma instancia
$a1->endereco = 'Rua Carolino de Aquino, 445';

$c1 = new Curso();
$c1->nome = 'PHP';

$disciplinas = ['Logica', 'Banco de Dados'];
$g1 = new Grade($c1, $disciplinas, 72);

$d1 = new Disciplina('Logica', 12, 'Introdução a logica, bla bla');
$d2 = new Disciplina('Banco de dados', 16);

$d3 = new Disciplina( //named arguments
  descricao: 'Como gerar relatorios',
  nome: 'DomPDF',
  cargaHoraria: 18
);

var_dump($d3);

