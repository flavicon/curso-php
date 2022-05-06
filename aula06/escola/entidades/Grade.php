<?php

class Grade
{
  public string $matricula;

  public function __construct (
    public Curso $curso,
    public array $disciplinas,
    public int $cargaHoraria
  ) {
    $this->matricula = date('Ymd-H');
  }


  //Modo de fazer mais comum, até o PHP 7.4
  /*
  public string $matricula;
  public Curso $curso;
  public array $disciplinas;
  public int $cargaHoraria;

  public function __construct(Curso $curso, array $disciplinas, int $cargaHoraria)
  {
    $this->curso = $curso;
    $this->disciplinas = $disciplinas;
    $this->cargaHoraria = $cargaHoraria;
  }*/
}
