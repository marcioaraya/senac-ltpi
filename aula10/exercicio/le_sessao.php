<?php
session_start();
// le_sessao.php
if (isset($_SESSION["c_usuario"])) {
    $usuario = $_SESSION["c_usuario"];
}
if (isset($_SESSION["c_idade"])){
    $idade = $_SESSION["c_idade"];
}
$nome_arquivo = "";
if (isset($_SESSION["c_cor"])){
    $cor = $_SESSION["c_cor"];

    if ($cor=="azul"){
        $nome_arquivo = "azul.css";
    } elseif ($cor =="vermelho") {
        $nome_arquivo = "vermelho.css";
    } elseif ($cor =="amarelo") {
        $nome_arquivo = "amarelo.css";
    }
}
echo '<!DOCTYPE html>
      <html>
      <head>
	     <title>Exemplo Leitura de Sessao</title><meta charset=\'utf-8\'>
         <link rel="stylesheet" type="text/css" href="'.$nome_arquivo.'" />
        </head>	 
      <body>';
echo '<h1> Lendo dados gravado na sessao </h1>';
if (isset($usuario)) {
    echo 'Olá! '.$usuario;
    echo '<br>';
    echo 'Sua idade:'.$idade;
    echo '<p><a href="limpa_sessao.php">Apagar variáveis de sessão</a></p>';
    echo '<p><a href="index.php">Ir para formulário</a></p>';
} else {
    echo "<p>Não foram localizadas variáveis de sessão</p>";
    echo '<p><a href="index.php">Ir para formulário.</a></p>';
}
echo '</body></html>';

?>
