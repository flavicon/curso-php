<?php

class Disciplina
{
  public int $id;
  public string $nome;
  public ?string $descricao; //pode ser null
  public int $cargaHoraria;

  public function __construct(string $nome, int $cargaHoraria, ?string $descricao = null)
  {
    $this->nome = $nome;
    $this->cargaHoraria = $cargaHoraria;
    $this->descricao = $descricao;
  }
}
