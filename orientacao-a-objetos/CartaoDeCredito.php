<?php

class   CartaoDeCredito
{
  public $numero;
  public $dataDeValidade;
  public $nome;

}

$cartao1 = New CartaoDeCredito;
$cartao1->numero = 111111;
$cartao1->dataDeValidade = "01/01/2013";

$cartao2 = New CartaoDeCredito;
$cartao2->numero = 222222;
$cartao2->dataDeValidade = "01/01/2014";

echo "numero $cartao1->numero" . PHP_EOL;
echo "dataDeValidade $cartao1->dataDeValidade" . PHP_EOL;
echo "numero $cartao2->numero" . PHP_EOL;
echo "dataDeValidade $cartao2->dataDeValidade" . PHP_EOL;
