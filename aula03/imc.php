<?php



function calcularIMC (int $peso, float $altura): float
{
    return $peso / ($altura * $altura);
}

echo calcularIMC(80, 1.65), PHP_EOL;
echo calcularIMC(86, 1.90), PHP_EOL;
