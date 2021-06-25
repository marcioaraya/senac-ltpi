<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 129</title>
</head>
<body>
    <h1>Sequência</h1>
    <?php
        include_once "sequencia.class.php";
        if (!isset($_GET["bt_sub"])){
            # mostrar formulário
    ?>
        <!-- não vamos informar o atributo "action" na tag <form> 
             porque o programa que vai receber os dados do formulário
             está no mesmo arquivo que a definição do formulário
        -->

        <form method="GET">
        <label for="id_inicial">Selecione o valor inicial:</label>
            <select name="inicio" id="id_inicial">
            <?php
                for($i=1;$i<=100;$i++){
                    echo '<option value="'.$i.'">'.$i.'</option>';
                }
            ?>
            </select>
            <br>
            <label for="id_final">Selecione o valor final:</label>
            <select name="fim" id="id_final">
            <?php
                for($i=1;$i<=100;$i++){
                    echo '<option value="'.$i.'">'.$i.'</option>';
                }
            ?>
            </select>
            <br>
            <p>Mostrar</p>
            <input type="radio" name="opcao" value="todos" id="id_todos" checked>
            <label for="id_todos">Todos</label>
            <br>
            <input type="radio" name="opcao" value="pares" id="id_pares">
            <label for="id_pares">Apenas os pares</label>
            <br>
            <input type="radio" name="opcao" value="impares" id="id_impares"> 
            <label for="id_impares">Apenas os ímpares</label>
            <br>
            <input type="submit" name="bt_sub" value="Mostrar a sequência">

        </form>
    <?php
        } else {
            # receber dados do formulário
            $inicio = $_GET["inicio"];
            $fim = $_GET["fim"];
            $opcao = $_GET["opcao"];

            # criar objeto da classe Sequencia
            $sequencia = new Sequencia();

            # inicializar atributos
            $sequencia->setInicio($inicio);
            $sequencia->setFim($fim);

            # exibir sequencia conforme opcao escolhida 
            if ($opcao=="todos"){
                $sequencia->exibirTodosNumeros();
            } elseif ($opcao=="pares"){
                $sequencia->exibirPares();
            } elseif ($opcao=="impares") {
                $sequencia->exibirImpares();
            } else {
                echo "<p>opção inválida.</p>";
            }

        }
    ?>
</body>
</html>