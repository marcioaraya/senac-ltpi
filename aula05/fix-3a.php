<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício de Fixação - 3</title>
</head>
<body>
    <h1>Exercício de Fixação - 3a / do while</h1>
    <?php
    # Ex.3a: completar o código para exibir os números de 0 a 100 (ordem crescente) 
    # usando do while

    $contador = 0;
    do {
        echo $contador . "<br>";
        $contador++;
    } while ($contador <= 100);

    echo "o contador agora vale ".$contador."<br>";
    ?>
</body>
</html>