
<?php
$cursos = array("Python", "Ruby");
$cursos[] = "Lógica de programaçãp"; //adicionando
var_dump($cursos);
for($i = 0; $i < count($cursos); $i++){
  echo "Cursos $i: $cursos[$i]" . PHP_EOL;
}
