<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício de Fixação - 2</title>
</head>
<body>
    <h1>Exercício de Fixação - 2</h1>
    <?php
    # Ex.2: completar o código para exibir os números de 100 a 0 (ordem decrescente) 
    # usando for
    # mostrar 100 98 96 94 ... 2 0

    for($contador = 100; $contador >= 0; $contador = $contador - 2){
        echo $contador . "<br>";
    }

    ?>
</body>
</html>