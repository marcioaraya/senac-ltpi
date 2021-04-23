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
        PassPorReferencia($valor);
        echo $valor."<br>";

        // Na passagem por referência o que ocorrer
        // com esse parâmetro altera o valor da variável global.
        function PassPorReferencia(&$parametro){
            echo "----> dentro da função<br>";
            echo $parametro."<br>";
            $parametro = "bom dia";
            echo $parametro."<br>";
            echo "----> fim da função<br>";
        }
        ?>
    </body>
</html>