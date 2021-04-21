<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício de Fixação - 2</title>
</head>
<body>
    <h1>Exercício de Fixação - 3 / do while</h1>
    <?php
    # Ex.3: completar o código para exibir os números de 100 a 0 (ordem decrescente) 
    # usando do while

    $contador = 100;
    do {
        echo $contador . "<br>";
        $contador--;
    } while ($contador >= 0);

    ?>
</body>
</html>