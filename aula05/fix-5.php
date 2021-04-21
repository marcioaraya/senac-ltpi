<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício Fixação - 5</title>
</head>
<body>
    <p>5) Escreva um programa PHP que percorra um vetor $numero com 10 posições e exiba o
     menor e o maior número existente nesse vetor. 
     Suponha que o conteúdo do vetor seja o seguinte: 
     $numero = array(5, 11, 7, 10, 8, 20, 35, 15, 99, 50);</p>
     <?php
        $numero = array(5, 11, 7, 10, 8, 20, 35, 15, 99, 50);
        $menor = $numero[0];
        $maior = $numero[0];

        foreach($numero as $n){
            if ($n < $menor) {
                $menor = $n;
            }
            if ($n > $maior) {
                $maior = $n;
            }            
        }

        echo "<p>O menor valor é $menor</p>";
        echo "<p>O maior valor é $maior</p>";
     ?>
</body>
</html>