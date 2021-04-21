<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $nota =  array(5.0, 6.0, 5.5, 7.0, 6.5, 8.0, 7.7, 9.0 );

        # var_dump($nota);

        echo "<p>Usando foreach</p>";

        echo "<p>Quantidade de notas:".count($nota)."</p>";

        $soma = 0.0;
        
        foreach ($nota as $p => $n) {
            $soma = $soma + $n;
            echo "<p>Vou somar posição $p com valor $n</p>";
            echo "<p>O valor de soma agora é $soma</p>";
        }

        $media = $soma/count($nota);
        echo "<p>Usando for</p>";
        echo "<p>A média das notas é ".$media."</p>";

    ?>
</body>
</html>