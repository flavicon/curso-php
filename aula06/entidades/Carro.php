<?php

declare(strict_types=1);

include 'Proprietario.php';
include 'CRLV.php';

class Carro
{
  public string $placa;
  public string $marca;
  public string $modelo;
  public string $cor;
  public int $numeroDeRodas;
  public bool $seguro;
  public int $km;
  public float $preco;
  public CRLV $documento;
}

$p1 = new Proprietario();
$p1->nome = 'Alessandro';
$p1->cpf = '123.123.123-12';


$doc = new CRLV();
$doc->renavam = '1A4627F92748CE';
$doc->ano = 2022;
$doc->proprietario = $p1;


$c1 = new Carro(); //instanciando um novo elemento Carro
$c1->documento = $doc;
$c1->placa = 'ORT-5515'; //informando os valores dos atributos
$c1->marca = 'Chevrolet';
$c1->modelo = 'Celta';
$c1->cor = 'Verde';
$c1->numeroDeRodas = 4;
$c1->seguro = false;
$c1->preco = 21500;
$c1->km = 19800;


echo "O carro é um ".$c1->modelo." e o RENAVAM é " . $c1->documento->renavam, " e o proprietario é o " . $c1->documento->proprietario->nome;
