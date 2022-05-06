<?php


function limparArray(array $lista): array
{
    $resultado = [];

    foreach ($lista as $cadaValor) {
      $resultado[] = ucfirst(
          strtolower(
             str_replace(' ', '', $cadaValor)
          )
      );
    }

    sort($resultado);

    return array_unique($resultado);
}


$convidados = [
  'Alessandro',
  'E lias',
  'Flávio',
  'Eriko',
  'oswaldo',
  'Alessandro',
  'alessandro',
  'OSWALDO',
  'Thiago',
  'thiago',
  'U Alison',
  'Renato',
  'Ualison',
  ' al capone',
  'ana carolina',
  'm aria nascimento'
];

foreach (limparArray($convidados) as $cadaConvidado) {
  echo $cadaConvidado, PHP_EOL;
}



foreach (limparArray(['a', 'A', 'A ', '    a', 'a', 'b', 'c', '    b    ']) as $letra) {
  echo $letra, PHP_EOL;
}
