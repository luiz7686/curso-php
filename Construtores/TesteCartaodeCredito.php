<?php
require_once 'CartaoDeCredito.php';
//require_once '../orientacao-a-objetos/Cliente.php'
$cartao1 = new CartaoDeCredito(1313);
$cartao1->dataDeValidade = "01/01/2013";
//$cliente1 = new Cliente;
//$cliente1->nome = "Rafael";
//$cliente1->codigo = 2;
//$cartao1->cliente = $cliente1
echo "Cartao de Crédito de número: $cartao1->numero, data de validade $cartao1->dataDeValidade" . PHP_EOL;
//echo "Cliente: cliente: {$cartao1->cliente->nome}" . PHP_EOL;
