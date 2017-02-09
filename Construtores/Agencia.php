
<?php
class Agencia{
  public $numero;
  public $unidade;
  public function __construct($numero, $unidade)
  {
    $this->numero = $numero;
    $this->unidade = $unidade;
  }
}
