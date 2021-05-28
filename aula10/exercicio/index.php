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
?><!DOCTYPE html>
<!-- arquivo index.html -->
<html>
<head>
  <title>Cadastro</title>
  <meta charset='UTF-8'>
  <link rel="stylesheet" type="text/css" href="<?php echo $nome_arquivo ?>" />
</head>
<body>
  <form action="proc_dados_s.php" method="get">
   <p>Nome: 
     <input type="text" name="nome">  </p>
   <p>Idade: 
     <input type="text" name="idade"> </p>
  
   <p>Escolha uma cor</p>
   <input type="radio" name="cor" value="azul" id="bt_azul">
   <label for="bt_azul">Azul</label>
   <br>
   <input type="radio" name="cor" value="amarelo" id="bt_amarelo">
   <label for="bt_amarelo">Amarelo</label>
   <br>
   <input type="radio" name="cor" value="vermelho" id="bt_vermelho">
   <label for="bt_vermelho">Vermelho</label>
   <br>
   <input type="submit" value="Enviar">
  </form>
</body>
</html>

