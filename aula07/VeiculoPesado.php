<?php

declare(strict_types=1);

class VeiculoPesado extends Veiculo
{
  private string $tipo;
  private float $altura;
  private float $largura;
  private int $capacidade;

  public function getCapacidade (): int
  {
    return $this->capacidade;
  }

  public function setCapacidade(int $cap): void
  {
    $this->capacidade = $cap;
  }
}
