<?php

class Cliente {

  public $nome;
  public $codigo;

}

$cliente1 = new Cliente;
$cliente1->nome = "Luiz Antonio";
$cliente1->codigo = 111;

echo "Nome do Cliente1: $cliente1->nome" . PHP_EOL;
echo "Código do cliente1: $cliente1->codigo" . PHP_EOL;
