<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trata Formulário 1</title>
</head>
<body>
    <h1>Dados recebidos do formulário</h1>

    <?php

        $v1 = $_POST["nome"];
        $v2 = $_POST["sobrenome"];

        echo '<p>O nome é '.$v1.'</p>';
        echo "<p>O sobrenome é $v2 </p.>";
    ?>
</body>
</html>