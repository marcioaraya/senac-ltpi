<?php 
        include_once "Retangulo.class.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Retângulo</title>
</head>
<body>
    <h1>Retângulo</h1>
    
    <?php
    if (!isset($_GET["bt_submit"])) {
    ?>

    <form method="GET">
        <label for="id_maior">Informe a largura:</label>
        <input type="number" id="id_maior" name="id_maior">
        <br>
        <label for="id_menor">Informe a altura:</label>
        <input type="number" id="id_menor" name="id_menor">
        <br>
        <input type="submit" value="Calcula área" name="bt_submit">
    </form>

    <?php 
    } else {

        # o mais correto seria validar os valores recebidos do formulário 

        $retangulo = new Retangulo;
        $retangulo->setLadoMaior($_GET["id_maior"]);
        $retangulo->setLadoMenor($_GET["id_menor"]);

        echo "<p>A área é ".$retangulo->calculaArea()."</p>";

    }
    ?>
</body>
</html>