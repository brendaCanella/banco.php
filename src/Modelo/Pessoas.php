<?php

namespace Alura\Banco\Modelo;


class Pessoas
{
  public $nome;
  public CPF $cpf;


  public function __construct(string $nome, CPF $cpf)
  {
    $this->validaNomeTitular($nome);
    $this->nome = $nome;
    $this->cpf = $cpf;
  }

  public function setNome(): string
  {
    return $this->nome;
  }

  public function setCpf(): CPF
  {
    return $this->cpf;
  }

  protected function validaNomeTitular(string $nomeTitular)
  {

    if (strlen($nomeTitular) < 5) {
      echo "Nome precisa ter pelo menos 5 caracteres";
      exit();
    }
  }
}
