<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Interpolação de variáveis</h1>
	<p> funciona ao utilizar aspas duplas (")</p>
	<?php
		$time = "Grêmio";
		$titulo = "Campeão da América";
		$ano1 = 1983;
		$ano2 = 1995;
		echo "<h2>O $time foi $titulo em $ano1 e $ano2.</h2>";
	?>
	
	<p> se usar aspas simples (') a string 
	será exibida exatamente como foi digitada</p>
	
	<?php
		echo '<h2>O $time foi $titulo em $ano1 e $ano2.</h2>';
	?>
	
</body>
</html>
