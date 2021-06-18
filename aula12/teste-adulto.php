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
        include_once "Adulto.php";

        # cria uma instância da classe Adulto
        # e atribui para variável $adulto1
        $adulto1 = new Adulto();
        $adulto1->setPeso(70);
        # ------------------------
        echo '<hr>';
        print_r($adulto1);
        echo '<hr>';
        # chama método engordar
        echo 'chama método engordar <br>';
        $adulto1->engordar(15);
        print_r($adulto1);
        echo '<hr>';
        # chama método emagrecer
        echo 'chama método emagrecer <br>';
        $adulto1->emagrecer(5);
        print_r($adulto1);
        echo '<hr>';

        echo '<p>Seu peso é '.$adulto1->getPeso().'kg</p>';
        if ($adulto1->getPeso() > 120) {
            echo "<p>Você está obeso</p>";
        }
        



    ?>
</body>
</html>