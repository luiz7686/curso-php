<?php

class Cliente {

  public $nome;
  public $codigo;

}

$cliente1 = new Cliente;
$cliente1->nome = "Rafael Consentino";
$cliente1->codigo = 1;

$cliente2 = new Cliente;
$cliente2->nome = "Jonas Hirata";
$cliente2->codigo = 2;

echo "$cliente1->nome" . PHP_EOL;
echo "$cliente1->codigo" . PHP_EOL;

echo "$cliente2->nome" . PHP_EOL;
echo "$cliente2->codigo" . PHP_EOL;
