<?php


require_once 'autoload.php';

$caminhoArquivo = 'src/Modelo/Endereco.php';

if (file_exists($caminhoArquivo)) {
  print "achou arquivo";
}

use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\Conta\Conta;



// $cpfBrenda = new CPF('101.465.681-84');
$endereco = new Endereco('Acreúna', 'Centro', 'minha rua', '71B');
$primeiraConta = new Conta(new Titular(new CPF('101.465.681-84'), 'Brenda', $endereco));
$primeiraConta->depositar(valorADepositar: 500);
$primeiraConta->sacar(valorASacar: 300);



echo $primeiraConta->recuperarCpfTitular()->verNumero() . PHP_EOL;
echo $primeiraConta->recuperarNomeTitular() . PHP_EOL;
// echo $primeiraConta->recuperarCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperarSaldo() . PHP_EOL;

// $cpfJulia = new CPF('080.955.42124');
$endereco2 = new Endereco('Acreúna', 'Centro', 'minha rua', '71B');
$segundaConta = new Conta(new Titular(new CPF('080.955.421-24'), 'Júlia Souza', $endereco2));
// var_dump($segundaConta);

echo Conta::recuperaNumeroDeContas() . PHP_EOL;
echo $segundaConta->recuperarCpfTitular()->verNumero() . PHP_EOL;
echo $segundaConta->recuperarNomeTitular() . PHP_EOL;
// echo $segundaConta->recuperarCpfTitular() . PHP_EOL;
echo $segundaConta->recuperarSaldo() . PHP_EOL;
