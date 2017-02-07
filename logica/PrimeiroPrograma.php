<?php

$contador = 0; //Declaracao


while($contador < 100 ) //Condicao de parada
{
  echo "Deu Onda" . PHP_EOL;
  $contador ++; //incremento
}

for ($contador = 0 ; $contador < 100; $contador++)
  {
      echo "Deu Onda" . PHP_EOL;
  }

//msjsiosjiosiojsosjios//

$nome = "Gretchen";

$altura = 3;

// altura minima para entrar e 1.40
// altura maxima para entrar eh 2.00

$resultado = $altura >= 1.40 && $altura <= 2;

echo "$altura >= 1.40 && $altura <= 2 : $resultado" . PHP_EOL;

if ($altura >= 1.40 && $altura <= 2) {

echo "Pode entrada" . PHP_EOL;
}
else {
  echo "Nao pode entrar" . PHP_EOL;
}



var_dump($resultado);

$a = 10;

$b = 100;

$resultado = $a === $b;

echo "$a === $b ? $resultado" . PHP_EOL;

var_dump($resultado);


$saldo=100;

$saldo += 300;

echo  "Saldo Final =  $saldo\n";

$saldo -= 200;

echo  "Saldo apos saque =  $saldo" . PHP_EOL;


echo  "Nome $nome Primeiro Programa em PHP que nao roda em um servidor\n" . PHP_EOL;
