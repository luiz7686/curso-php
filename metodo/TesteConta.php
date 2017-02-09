<?php
require_once 'Conta.php';
require_once 'Agencia.php';
require_once 'TesteContaAgencia.php';
$conta = new Conta(1);
$conta-> numero = 13;
$conta->deposita(1000);
echo "Saldo: $conta->saldo" . PHP_EOL;
$resultado = $conta->saca(100);
if ($resultado) {
echo "Saque efetuado com sucesso! \n " . PHP_EOL;}
else {
  echo "Saldo insuficiente" . PHP_EOL;
}
$conta->imprimeExtrato();
