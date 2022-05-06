<?php

function maiorNumero(float $n1, float $n2, float $n3): float
{
  if ($n1 > $n2 && $n1 > $n3) {
    return $n1;
  }

  if ($n2 > $n1 && $n2 > $n3) {
    return $n2;
  }

  return $n3;
}

echo maiorNumero(10, 20, 50), PHP_EOL;
echo maiorNumero(100, 20, 50), PHP_EOL;
echo maiorNumero(10, 200, 50), PHP_EOL;
