<?php


class Aluno {

  public $nome;
  public $rg;
  public $dataNascimento;
  public $turma;

}

$aluno1 = new Aluno;
$aluno1->nome = "Rafael Cosentino";
$aluno1->rg = "11111111-1";
$aluno1->dataNascimento = "30/10/1984";

class Turma {

  public $periodo;
  public $serie;
  public $sigla;
  public $tipoDeEnsino;

}

$turma1 = New Turma;
$turma1->periodo = "Manha" ;
$turma1->serie = 5;
$turma1->sigla = "B";
$turma1->tipoDeEnsino = "Fundamental";

$aluno1->turma=$turma1;

echo "Turma\n";
echo " periodo {$aluno1->turma->periodo}\n";
echo " serie {$aluno1->turma->serie}\n";
echo " sigla {$aluno1->turma->sigla}\n";
echo " TipoDeEnsino {$aluno1->turma->tipoDeEnsino}\n";
echo "" . PHP_EOL;
echo "Aluno\n";
echo " nome $aluno1->nome\n";
echo " dataDeNascimento $aluno1->dataNascimento\n";
echo " rg $aluno1->rg\n";
