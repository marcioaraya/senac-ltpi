<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício de Fixação - 8</title>
</head>
<body>
    <h1>Exercício 8</h1>
    <?php
    /*
    Suponha que em um programa PHP há dois vetores $x e $y 
    cada um contendo 10 números. Escreva um programa que 
    some as posições correspondentes e 
    exiba o valor de $x, $y e a soma. 
    Use os comandos abaixo para inicializar os vetores:
    $x = array(1, 3, 5, 7, 8, 11, 13, 15, 17, 19);
    $y = array(2, 4, 6, 8, 10, 12, 14, 16, 18, 20);
    Com esses valores deve produzir o seguinte resultado:
    x: 1 –y: 2 –Soma: 3
    x: 3 –y: 4 –Soma: 7
    x: 5 –y: 6 –Soma: 11
    x: 7 –y: 8 –Soma: 15... e assim por diante
    */
    $x = array(1, 3, 5, 7, 8, 11, 13, 15, 17, 19);
    $y = array(2, 4, 6, 8, 10, 12, 14, 16, 18, 20);

    /* $x é o vetor que será percorrido pelo foreach
       $p = será posição (índice do vetor em uma determina posição)
       $n = será o valor contido no vetor 
            na posição cujo índice é $p
    */

    foreach($x as $p => $n){
        $soma = $n + $y[$p];
        echo "<p>x: $n + y: $y[$p]  Soma: $soma</p>";
    }

    echo "<h1>Usando for</h1>";
    /* count() devolve a quantidade de elementos 
       em um vetor
    */
    for($i=0;$i<count($x);$i++){
        //$soma = ;
        echo "<p>x: $x[$i] + y: $y[$p] Soma: ".($x[$i] + $y[$i])."</p>";
    }

    ?>
</body>
</html>