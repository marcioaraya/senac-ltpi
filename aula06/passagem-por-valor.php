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

        $valor = "oi";
        echo $valor."<br>";
        PassPorValor($valor);
        echo $valor."<br>";

        // Na passagem por valor (que é o padrão)
        // é feita uma cópia do valor na passagem do parâmetro
        function PassPorValor($parametro){
            echo "----> dentro da função<br>";
            echo $parametro."<br>";
            $parametro = "bom dia";
            echo $parametro."<br>";
            echo "----> fim da função<br>";
        }
        ?>
    </body>
</html>