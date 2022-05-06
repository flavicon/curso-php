<?php

declare(strict_types=1);

class Cliente
{
  private string $nome;
  private readonly string $cpf;
  private ?string $endereco;
  private Veiculo $veiculo;

  public function __construct(string $nome, string $cpf)
  {
    $this->nome = $nome;
    $this->cpf = $cpf;
  }

  public function getNome(): string
  {
    return $this->nome;
  }

  public function setNome(string $nome): void
  {
    $this->nome = $nome;
  }

  public function getVeiculo(): Veiculo
  {
    return $this->veiculo;
  }

  public function setVeiculo(Veiculo $vec): void
  {
    $this->veiculo = $vec;
  }

  public function getEndereco(): ?string
  {
    return $this->endereco;
  }

  public function setEndereco(?string $endereco): void
  {
    $this->endereco = $endereco;
  }
}
