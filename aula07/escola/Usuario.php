<?php

declare(strict_types=1);

//fechando essa classe pra ser instanciada, ou seja, não pode criar variaveis do tipo "Usuario"
abstract class Usuario
{
  public string $nome;
  public string $email;
  public string $senha;
  public string $permissoes;

  public function __construct(string $nome)
  {
    $this->nome = $nome;
  }
}
