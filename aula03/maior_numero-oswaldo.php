<?php

function maiorNumero(float $n1, float $n2, float $n3): float
{
  $maior = ($n1 + $n2 + abs($n1 - $n2)) / 2;
  return ($maior + $n3 + abs($maior - $n3)) / 2;
}

echo maiorNumero(10, 20, 50), PHP_EOL;
echo maiorNumero(100, 20, 50), PHP_EOL;
echo maiorNumero(10, 200, 50), PHP_EOL;
