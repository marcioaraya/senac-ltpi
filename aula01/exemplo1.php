<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Primeiro Programa</h1>
    <?php
        $nome = "Marcio";
        echo "<p>Olá! $nome.</p>";
    ?>
	<h1>Horário</h1>
	<?php
		date_default_timezone_set('America/Sao_Paulo');
		$date = date('Y-m-d H:i');
		echo $date;
	?>
</body>
</html>
