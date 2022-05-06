<?php

declare(strict_types=1);

include 'Veiculo.php';
include 'Cliente.php';
include 'VeiculoPesado.php';

$carro = new Veiculo('CHASSI1234', 'Chevrolet', 'Celta');
// $carro->setCor('Verde');
$carro->setKm(109000);
$carro->setKm(890);
$carro->setPlaca('ORT-5515');

$cliente = new Cliente('Chiquim', '123.123.123-12');
$cliente->setVeiculo($carro);


$optimusPrime = new VeiculoPesado('CHA12345', 'Mercedez', 'AAABBB');
$optimusPrime->setCapacidade(900);

echo "Me chamo ".$cliente->getNome().PHP_EOL;
echo "Meu carro é um ".$carro->getModelo()." e tem km = ".$carro->getKm().PHP_EOL;
echo "Da cor ". $carro->getCor().PHP_EOL.PHP_EOL;
echo "Meu caminhão é ".$optimusPrime->getModelo();
