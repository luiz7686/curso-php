<?php

class Funcionario {

  public $nome;
  public $salario;

}

$funcionario1 = New Funcionario;
$funcionario2 = New Funcionario;

$funcionario1->nome = "Marcelo Martins";
$funcionario2->nome = "Rafael Cosentino";

$funcionario1->salario = 1800.57;
$funcionario2->salario = 2000.88;

echo "nome $funcionario1->nome\n";
echo "salario  $funcionario1->salario\n";
echo "" . PHP_EOL;
echo "nome $funcionario2->nome\n";
echo "salario  $funcionario2->salario\n";
