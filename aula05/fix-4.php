<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício Fixação 4</title>
</head>
<body>
    <p>Escreva um programa PHP que exiba o conteúdo de um vetor $nomes em uma tabela HTML. O
conteúdo desse vetor são dez nomes. (fique a vontade para escolher os nomes que irá atribuir a cada posição
do vetor).</p>

    <?php
        $nomes=["Ryan", "Anthony", "Gilberto", "Adson", "Ana", "Christian", "Eduardo", "Gabriel", "Lucas", "Michelle"];

        echo "<table border=\"1\">";
        echo "<tr><th>Nome</th></tr>";
        foreach($nomes as $n){
            echo "<tr><td>$n</td></tr>";
        }
        echo "</table>";
        echo "<hr>";
        echo "<table border=\"1\">";
        #crio a linha
        echo "<tr>";
        #crio coluna cabeçalho
        echo "<th>Nome</th>";
        #crio as colunas com cada nome do vetor
        foreach($nomes as $n){
            echo "<td>$n</td>";
        }
        echo "</tr>";
        echo "</table>";

    ?>
</body>
</html>