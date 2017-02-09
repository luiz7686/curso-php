<?php
require_once 'Turma.php';
require_once 'Aluno.php';
$turma1 = new Turma;
$turma1->periodo = "Manha";
$turma1->serie = 5;
$turma1->sigla = "B";
$turma1->tipoDeEnsino = "Fundamental";
$aluno1 = new Aluno;
$aluno1->nome = "Rafael Cosentino";
$aluno1->dataNascimento = "30/10/1984";
$aluno1->rg = "11111111";
$aluno1->turma = $turma1;
echo "O aluno $aluno1->nome pertence a serie {$aluno1->turma->serie}, sigla {$aluno1->turma->sigla}" . PHP_EOL;
