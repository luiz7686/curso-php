<?php

  class Conta {

      public $numero;
      public $saldo;
      public $dono;

  }

  $conta = new Conta;

  $conta->numero = 123;
  $conta->saldo = 550;

class Cliente {

  public $nome;

}

$cliente = new Cliente;
$cliente->nome = "Joao";
$conta->dono = $cliente;

echo "Nome : {$conta->dono->nome}\n";
echo "Número da Conta : $conta->numero\n";
echo "Saldo: $conta->saldo" . PHP_EOL;
