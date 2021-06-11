<?php
// salvar como teste1.php
include_once "conta.class.php";

$conta1 = new Conta(0, 123);

//var_dump($conta1);

echo "O saldo eh:".$conta1->ObterSaldo()."<br>";
$conta1->Depositar(500);

// $conta1->Saldo = -2000;

echo "O saldo eh:".$conta1->ObterSaldo()."<br>";
$conta1->Sacar(500);
echo "O saldo eh:".$conta1->ObterSaldo()."<br>";

?>
