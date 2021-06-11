<?php
// salvar como conta.class.php em C:\XAMPP\HTDOCS\OBJ
class Conta {
//atributos
protected $Saldo;
protected $Numero;

// métodos
// método construtor - chamado automaticamente
// quando se cria uma instância desta classe
  function __construct($s, $n) {
	  $this->Saldo = $s;
	  $this->Numero = $n;
  }
  
  public function Depositar($v){
    $this->Saldo += $v;
  }
 
  public function Sacar($v) {
    if ($this->Saldo >= $v) {
      $this->Saldo -= $v;
	  echo ' o saque foi de '.$v.'<br>';
    } else {
		echo 'saldo insuficiente <br>';
	}
  }
  
  public function ObterSaldo() {
    return $this->Saldo;
  } 
} 
// salvar como conta.class.php em C:\XAMPP\HTDOCS\OBJ
?>




	