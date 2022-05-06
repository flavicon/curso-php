<?php

class Aluno
{
  public string $matricula;
  public string $nome;
  public string $cpf;
  public string $endereco;


  public function __construct(string $nome, string $cpf)
  {
    $this->nome = $nome;
    $this->cpf = $cpf;
    $this->matricula = date('Ym').str_replace('.', '', $cpf); //gerando uma matricula automaticamente baseada na data atual e no CPF
  }
}
