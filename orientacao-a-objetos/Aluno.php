<?php


class Aluno {

  public $nome;
  public $rg;
  public $dataDeNascimento;

}

$aluno1 = New Aluno;

$aluno2 = New Aluno;

$aluno1->nome = "Marcelo Martins";
$aluno2->nome = "Rafael Cosentino";

$aluno1->rg = "33333333-3";
$aluno2->rg = "22222222-2";

$aluno1->dataDeNascimento = "02/04/1985";
$aluno2->dataDeNascimento = "30/10/1984";

echo "nome $aluno1->nome" . PHP_EOL;
echo "rg $aluno1->rg" . PHP_EOL;
echo "dataDeNascimento $aluno1->dataDeNascimento" . PHP_EOL;
echo "" . PHP_EOL;

echo "nome $aluno2->nome" . PHP_EOL;
echo "rg $aluno2->rg" . PHP_EOL;
echo "dataDeNascimento $aluno2->dataDeNascimento" . PHP_EOL;
