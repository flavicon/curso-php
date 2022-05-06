<?php
function media(array $notas): float
{
  $total = 0;
  $quantidade = 0;

  foreach ($notas as $cadaNota) {
    $total += $cadaNota;
    $quantidade++;
  }

  return $total / $quantidade;
}

echo media([10, 9, 8.5, 6]), PHP_EOL;
echo media([9, 5, 7.3]), PHP_EOL;
echo media([8, 5, 3, 10, 9]), PHP_EOL;
