<?php
require_once 'Agencia.php';
$agencia1 = new Agencia(123, "Tucuruvi");
echo "Agencia: $agencia1->numero" . PHP_EOL;
echo "Unidade: $agencia1->unidade" . PHP_EOL;
