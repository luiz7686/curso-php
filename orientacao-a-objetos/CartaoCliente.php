<?php

class   CartaoDeCredito
{
  public $numero;
  public $dataDeValidade;
  public $nome;

}

$cartao1 = New CartaoDeCredito;
$cartao1->numero = 111111;
$cartao1->dataDeValidade = "12/12/18";

$cartao2 = New CartaoDeCredito;
$cartao2->numero = 222222;
$cartao2->dataDeValidade = "01/01/2014";
/*
echo "numero $cartao1->numero" . PHP_EOL;
echo "dataDeValidade $cartao1->dataDeValidade" . PHP_EOL;
echo "numero $cartao2->numero" . PHP_EOL;
echo "dataDeValidade $cartao2->dataDeValidade" . PHP_EOL;
*/

class Cliente {

  public $nome;
  public $codigo;

}



$cliente1 = new Cliente;
$cliente1->nome = "Rafael Consentino";
$cliente1->codigo = 123;

$cliente2 = new Cliente;
$cliente2->nome = "Jonas Hirata";
$cliente2->codigo = 2;


$cartao1->nome = $cliente1;

echo "nome {$cartao1->nome->nome}" . PHP_EOL;
echo "codigo {$cartao1->nome->codigo}" . PHP_EOL;
echo "numero $cartao1->numero" . PHP_EOL;
echo "dataDeValidade $cartao1->dataDeValidade" . PHP_EOL;
