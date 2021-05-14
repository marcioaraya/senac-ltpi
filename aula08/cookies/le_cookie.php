<?php
if (isset($_COOKIE["c_usuario"])) {
    $usuario = $_COOKIE["c_usuario"];
} 
if (isset($_COOKIE["c_idade"])) {
    $idade = $_COOKIE["c_idade"];
}
if (isset($_COOKIE["c_acesso"])) {
    $acesso = $_COOKIE["c_acesso"];
}

echo '<!DOCTYPE html>
      <html>
      <head>
	     <title>Exemplo Leitura de Cookies</title>
		 <meta charset=\'utf-8\'>
      <body>';
echo '<h1> Lendo dados gravado nos cookies </h1>';
if (isset($usuario)) {
    echo 'Olá! '.$usuario;
    echo '<br>';
    echo 'Sua idade:'.$idade;
    echo '<br>';
    $agora = time();
    $intervalo = $agora - $acesso;
    echo "Passaram ".$intervalo." segundos desde o primeiro acesso.";
    echo "<br>";
    echo '<p><a href="limpa_cookie.php">Apagar cookies</a></p>';
} else {
    echo "<p>Não foram localizados cookies. 
            Retorne ao formulário para informar seus dados.</p>";
    echo '<p><a href="index.html">Ir para formulário.</a></p>';
}

echo '</body></html>';

?>
