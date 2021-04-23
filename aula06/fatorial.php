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
        echo $valor."<br>"; //a variável valor só existe dentro da função Fatorial
        echo "Fatorial(5): ".Fatorial(5) . "<br>";
        echo "Fatorial(7): ".Fatorial(7) . "<br>";
        echo $valor."<br>"; //a variável valor só existe dentro da função Fatorial

        function Fatorial($numero){
            $valor = 0;
            echo $valor."<br>";
            if ($numero == 1){
                echo "--> Fatorial($numero) = $numero<br>";
                return $numero;
            }
            else {
                $valor = $numero * Fatorial($numero -1);
                echo "--> Fatorial($numero) = $valor<br>";
                return $valor;
            }
        }
        ?>
    </body>
</html>