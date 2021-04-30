<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício de Fixação - 6</title>
</head>
<body>
    <h1>Exercício 6</h1>
    <?php
    /*
    Escreva  um  programa  PHP  que  percorra o vetor $numero
    e conte  quantos  números  contidos  nesse vetor  são
    maiores  do  que 15.
    */

        $numero = array(5, 11, 7, 10, 8, 20, 35, 15, 99, 50);
        // cria variável auxiliar para guardar
        // qtd de números maiores que 15
        // que existem no vetor $numero
        $qtd = 0;
         
        foreach($numero as $n){
            if ($n > 15){
                $qtd++; # $qtd = $qtd + 1;
            }
        }

        echo "<p>A quantidade de elementos
              maiores que 15 no vetor é $qtd.</p>";



    ?>
</body>
</html>