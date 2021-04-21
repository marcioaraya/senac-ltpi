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
    $vlr1 = $_GET["valor1"]; # 1
    $vlr2 = $_GET["valor2"]; # 2

    if ($vlr1 > $vlr2) {
        echo "<p>O valor $vlr1 é o maior.</p>";
    } elseif ($vlr1 == $vlr2) {
        echo "<p> O valores são iguais:  $vlr2.</p>";
    } else {
        echo "<p> O valor $vlr2 é o maior.</p>";
    }
    ?>


</body>
</html>