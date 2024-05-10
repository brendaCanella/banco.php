<?php

function sacar($conta, float $valorSacar)
{
  if ($valorSacar > $conta['saldo']) {
    exibeMensagem("Você não tem saldo suficiente");
  } else {
    $conta['saldo'] -= $valorSacar;
  }
  return $conta;
}


function exibeMensagem($mensagem)
{
  echo $mensagem . PHP_EOL;
}


function titularUpperCase(array $conta)
{
  $conta['titular'] = strtoupper($conta['titular']);
}
