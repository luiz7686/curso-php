<?php



spl_autoload_register();

class Agencia {

  public $numero;

}

$agencia1 = new Agencia;
$agencia1->numero=178;

class Conta {
  public $numero;
  public $saldo;
  public $limite;
  public $agencia;
}

$conta1 = new Conta;
$conta1->numero = 123;
$conta1->saldo = 1000.00;
$conta1->limite = 500;
$conta1->agencia= $agencia1;

echo "agencia\n";
echo " numero {$conta1->agencia->numero}\n";
echo "" . PHP_EOL;
echo "conta\n";
echo " numero $conta1->numero\n";
echo " saldo $conta1->saldo\n";
echo " limite $conta1->limite\n";
