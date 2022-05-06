<?php

declare(strict_types=1);

class Veiculo
{
  private readonly string $chassi; //readonly é apenas php8.1
  private string $modelo;
  private string $marca;
  private ?string $placa;
  private string $cor = 'cor';
  private int $km = 0;

  public function __construct(string $chassi, string $marca, string $modelo)
  {
      $this->chassi = $chassi;
      $this->marca = $marca;
      $this->modelo = $modelo;
  }

  public function getMarca(): string //acesso
  {
    return $this->marca;
  }

  public function setMarca(string $marca): void
  {
    $this->marca = $marca;
  }

  public function getModelo(): string //acesso
  {
    return $this->modelo;
  }

  public function setModelo(string $modelo): void
  {
    $this->modelo = $modelo;
  }

  public function getCor(): string //acesso
  {
    return $this->cor;
  }

  public function setCor(string $cor): void
  {
    $this->marca = $cor;
  }

  public function setKm(int $km): void
  {
    if ($km < 0) {
      die('Km não pode ser negativa');
    }

    $this->km = $km;
  }

  public function getKm(): int
  {
    return $this->km;
  }

  public function getPlaca(): ?string //acesso
  {
    return $this->placa;
  }

  public function setPlaca(?string $placa): void
  {
    $this->marca = $placa;
  }
} //fechando a classe
