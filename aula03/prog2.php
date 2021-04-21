<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
/*
Exercício: 
1. Escreva o código para criar um formulário HTML que receba um número inteiro.
2. Escreva o código PHP que escreva:
- PING se o número for  múltiplo de 3
- PONG se o número for múltipo de 5
- PINGPONG se o número for múltiplo de 3 e 5 ao mesmo tempo.
*/

    $vlr1 = $_GET["valor1"]; 

    if ($vlr1%3==0 && $vlr1%5==0) {
        echo "<p>PINGPONG</p>";
    } elseif ($vlr1%3 == 0) {
        echo "<p>PING</p>";
    } elseif ($vlr1%5 == 0) {
        echo "<p>PONG</p>";
    } else {
        echo "<p>Não é divisível nem por 3 nem por 5</p.>";
    }
    
    ?>

    <p>Clique <a href="form2.html">aqui</a> para voltar para o formulário</p>
</body>
</html>