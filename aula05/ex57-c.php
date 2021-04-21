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
        # vetor associativo é o nome de um vetor cujos índices não são numéricos,
        # isto é, os índices são strings
        $frutas = array("um"=>"Maçã", "dois"=>"Amora", "três"=>"Uva");
        foreach($frutas as $indice=>$fruta){
            echo $indice."=>".$fruta."<br> ";
        }
    ?>
</body>
</html>