<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício de Fixação - 1 / while </title>
</head>
<body>
    <h1>Exercício de Fixação - 1 / while </h1>
    <?php
    # Ex.1: completar o código para exibir os números de 100 a 0 (ordem decrescente)
    $contador = 100;
    while ($contador >= 0 ) {
        echo $contador . "<br>";
        $contador--; # $contador = $contador - 1;
    }
    ?>
</body>
</html>