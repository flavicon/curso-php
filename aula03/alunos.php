<?php

$alunos = [
  'Elias',
  'Eriko',
  'Renato',
];

$alunos[] = 'Oswaldo';
$alunos[11] = 'Ualison';
$alunos[] = 'Flávio';
$alunos[123] = 'Thiago';
$alunos[] = 'Chiquim';
$alunos[] = 'Maria';
$alunos[] = 'Hugo';

foreach ($alunos as $posicao => $cadaAluno) {
  echo "{$posicao}: {$cadaAluno}", PHP_EOL;
}


// $qtd = count($alunos);
//
// for ($i = 0; $i < $qtd; $i++) {
//   echo $alunos[$i],PHP_EOL;
// }
