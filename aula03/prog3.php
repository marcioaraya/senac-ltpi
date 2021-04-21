<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Operador ternário</p>
    
    <?php
        $n1 = 10;
        $n2 = 15;

        # $n3 deve ficar com o maior valor 
        # dentre as variáveis $n1 e $n2
/*
        if ($n1 > $n2) {
            $n3 = $n1;
        } else {
            $n3 = $n2;
        }
*/
        # usando operador ternário

        $n3 = ($n1>$n2) ? $n1 : $n2;

        echo '<p>O valor de $n3 é '. $n3 . '</p>';

    
    ?>


</body>
</html>