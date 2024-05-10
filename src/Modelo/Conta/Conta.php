<?php


namespace Alura\Banco\Modelo\Conta;

// use Alura\Banco\Modelo\Titular;
use Alura\Banco\Modelo\CPF;

class Conta
{
    public $titular;
    protected $saldo;
    public static $numeroDeContas = 0;

    public function __construct(Titular $titular)
    {
        $this->titular = $titular;
        $this->saldo = 0;
        self::$numeroDeContas++;
    }

    public function sacar(float $valorASacar): void
    {
        $tarifaSaque = $valorASacar * 0.05;
        $valorSaque = $valorASacar + $tarifaSaque;
        
        if ($valorSaque > $this->saldo) {
            echo "Saldo indisponível";
            return;
        }
        
        $this->saldo -= $valorSaque;
    }

    public function depositar(float $valorADepositar): void
    {
        if ($valorADepositar < 0) {
            echo "Valor precisa ser positivo";
        } else {
            $this->saldo += $valorADepositar;
        }
    }

    public function transferir(float $valorATransferir, Conta $contaDestino): void
    {
        if ($valorATransferir > $this->saldo) {
            echo "Saldo indisponível";
        } else {
            $this->sacar($valorATransferir);
            $contaDestino->depositar($valorATransferir);
        }
    }

    public function recuperarSaldo(): float
    {
        return $this->saldo;
    }

    public function recuperarNomeTitular(): string
    {
        return $this->titular->recuperaNome();
    }

    public function recuperarCpfTitular(): CPF
    {
        return $this->titular->recuperaCpf();
    }

    public static function recuperaNumeroDeContas(): int
    {
        return self::$numeroDeContas;
    }
}
















































// namespace Alura\Banco\Modelo\Conta;

// use Alura\Banco\Modelo\CPF;
// // aqui temos uma classe


// class Conta
// {
//   protected  $titular;
//   protected $saldo;
//   protected static $numeroDeContas = 0;         /* atributos da classe*/
 


//   public function __construct(Titular $titular)  /*metodo*/
//   {
//     $this->titular = $titular;
//     $this->saldo = 0;
//     Conta::$numeroDeContas++;
//   }



//   public function sacar(float $valorASacar): void
//   {


//     if ($this->tipo === 1) {
//       $tarifaSaque = $valorASacar * 0.05;
//     $valorSaque = $valorASacar + $tarifaSaque;
//     if ($valorSaque > $this->saldo) {
//       echo "Saldo indisponivel";
//       return;
//     }
//     $this->saldo -= $valorSaque;
//   }}

//   public function depositar(float $valorADepositar): void
//   {
//     if ($valorADepositar < 0) {
//       echo "Valor precisa ser positivo";
//     } else {
//       $this->saldo += $valorADepositar;
//     }
//   }


//   public function transferir(float $valorATransferir, Conta $contaDestino): void
//   {
//     if ($valorATransferir > $this->saldo) {
//       echo "Saldo indisponível";
//     } else {
//       $this->sacar($valorATransferir);
//       $contaDestino->depositar($valorATransferir);
//     }
//   }


//   public function recuperarSaldo(): float
//   {
//     return $this->saldo;
//   }

//   public function recuperarNomeTitular(): string
//   {
//     return $this->titular->recuperaNome();
//   }

//   public function recuperarCpfTitular(): CPF
//   {
//     return $this->titular->recuperaCpf();
//   }


//   public static function recuperaNumeroDeContas(): int
//   {
//     return Conta::$numeroDeContas;
//   }
// }
