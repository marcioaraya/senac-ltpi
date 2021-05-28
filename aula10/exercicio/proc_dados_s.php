<?php
    session_start();
    // proc_dados.php
    $v_usuario = $_GET["nome"];
    $v_idade = $_GET["idade"];
    $v_cor = $_GET["cor"];

?>
<!DOCTYPE html> 
<html>
    <head>
        <meta charset="UTF-8">
        <?php
            $nome_arquivo = "";
            if ($v_cor=="azul"){
                $nome_arquivo = "azul.css";
            } elseif ($v_cor =="vermelho") {
                $nome_arquivo = "vermelho.css";
            } elseif ($v_cor =="amarelo") {
                $nome_arquivo = "amarelo.css";
            }
            echo '<link rel="stylesheet" type="text/css" href="'.$nome_arquivo.'">';
        ?>
    </head>
    <body>
    <?php


    //setcookie("c_usuario", $v_usuario,time()+7200);
    //setcookie("c_idade", $v_idade,time()+7200);
    $_SESSION["c_usuario"]=$v_usuario;
    $_SESSION["c_idade"]=$v_idade;
    $_SESSION["c_cor"]=$v_cor;


    echo 'Ola! '.$v_usuario; // "Ola! $v_usuario";
    echo '<br>';
    echo 'Sua idade:'.$v_idade;
    echo '<br><br>';
    echo '<a href="le_sessao.php"> Ler dados gravados nas variaveis de sessão</a>';
    //$_SESSION["c_idade"]=15;
    
    ?>
    </body>
</html>




