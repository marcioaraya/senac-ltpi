<?php
// contaespecial.class.php

class ContaEspecial extends Conta {
	
protected $Limite;

  function __construct($s, $n, $l) {
	  parent::__construct($s, $n);
    /* $this->Saldo = $s;
       $this->Numero = $n;
    */
	  $this->Limite = $l;
  }
 
  function Sacar($v) {
	if (($this->ObterSaldo() + $this->Limite)>= $v) {
      $this->Saldo = $this->Saldo - $v;// $this->Saldo -= $v;
    } else {
		echo "Saldo insuficiente<br>";
	}
  }
} 
?>
	