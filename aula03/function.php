<?php

function soma (float $n1, float $n2): float
{
  return $n1 + $n2;
}

echo soma(10, 40), PHP_EOL;


echo PHP_EOL,PHP_EOL,PHP_EOL;


function welcome ($nome = 'Visitante') {
  return "Bem vindo {$nome}".PHP_EOL;
}

echo welcome('Eriko');
echo welcome('Flavio');
echo welcome();
