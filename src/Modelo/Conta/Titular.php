<?php

namespace Alura\Banco\Modelo\Conta;

use Alura\Banco\Modelo\Pessoas;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Endereco;



class Titular extends Pessoas
{
  private Endereco $endereco;


  public function __construct(CPF $cpf, string $nome, Endereco $endereco)
  {
    parent::__construct($nome, $cpf);
    $this->endereco = $endereco;
  }


  public function recuperaCpf(): CPF
  {
    return $this->cpf;
  }

  public function recuperaNome(): string
  {
    return ($this->nome);
  }


  private function recuperaEndereco(): Endereco
  {
    return $this->endereco;
  }
}