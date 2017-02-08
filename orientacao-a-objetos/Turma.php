<?php

class Turma {

  public $periodo;
  public $serie;
  public $sigla;
  public $tipoDeEnsino;

}

$turma1 = New Turma;
$turma1->periodo = "Tarde" ;
$turma1->serie = 8;
$turma1->sigla = "A";
$turma1->tipoDeEnsino = "Fundamental";

$turma2 = New Turma;
$turma2->periodo = "Manha" ;
$turma2->serie = 5;
$turma2->sigla = "B";
$turma2->tipoDeEnsino = "Fundamental";

echo "periodo $turma1->periodo\n";
echo "serie $turma1->serie\n";
echo "serie $turma1->sigla\n";
echo "serie $turma1->tipoDeEnsino\n";
echo "" . PHP_EOL;
echo "periodo $turma2->periodo\n";
echo "serie $turma2->serie\n";
echo "serie $turma2->sigla\n";
echo "serie $turma2->tipoDeEnsino\n";
