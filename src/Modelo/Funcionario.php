<?php



namespace Alura\Banco\Modelo\Conta;


use Alura\Banco\Modelo\Pessoas;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Endereco;



class Funcionario extends Pessoas
{
  private $cargo;

  public function __construct(string $nome, CPF $cpf, string $cargo)
  {
    parent::__construct($nome, $cpf);
    $this->cargo = $cargo;
  }

  public function getCargo(): string
  {
    return $this->cargo;
  }

  public function alteraNome(string $nome): void
  {
    $this->validaNomeTitular($nome);
    $this->nome = $nome;
  }
}
