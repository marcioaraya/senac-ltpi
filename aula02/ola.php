<!DOCTYPE html>
<html>
<head>
	<title>exemplo</title>
	<meta charset="UTF-8">  
</head>
<body>
<?php
$nome = $_GET["nome"];
$sobrenome = $_GET["sobrenome"];
$idade = $_GET["idade"];
echo "Olá! $nome $sobrenome. 
<br>Seja bem vindo!";
echo "<p>Você tem $idade anos.</p>";


?>
</body>
</html>
