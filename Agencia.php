<?php
class Agencia{
  public $numero;
  public $nome;

  function __construct(int $numero, string $nome = "a")
  {
    $this->numero = $numero;
    $this->nome = $nome;
  }
}
