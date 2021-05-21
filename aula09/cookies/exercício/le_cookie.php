<?php
# date_default_timezone_set('America/Sao_Paulo');

if (isset($_COOKIE["c_usuario"])) {
    $usuario = $_COOKIE["c_usuario"];
} 
if (isset($_COOKIE["c_idade"])) {
    $idade = $_COOKIE["c_idade"];
}
if (isset($_COOKIE["c_acesso"])) {
    $acesso = $_COOKIE["c_acesso"];
}
if (isset($_COOKIE["c_ultimo_acesso"])) {
    $ultimo_acesso = $_COOKIE["c_ultimo_acesso"];
}
echo '<!DOCTYPE html>
      <html>
      <head>
	     <title>Exemplo Leitura de Cookies</title>
		 <meta charset=\'utf-8\'>
      <body>';
echo '<h1> Lendo dados gravado nos cookies </h1>';
if (isset($usuario)) {
    $agora = time();
    $intervalo1 = $agora - $acesso;
    $intervalo2 = $agora - $ultimo_acesso;
    
    if ($intervalo2 <=30){
        echo 'Olá! '.$usuario;
        echo '<br>';
        echo 'Sua idade:'.$idade;
        echo '<br>';
        echo "Agora: " . date('d-m-Y H:i:s', $agora);
        echo "<br>";
        echo "Passaram ".$intervalo1." segundos desde o primeiro acesso: " . date('d-m-Y H:i:s', $acesso);
        echo "<br>";
        echo "Passaram ".$intervalo2." segundos desde o último acesso: " . date('d-m-Y H:i:s', $ultimo_acesso);
        setcookie("c_ultimo_acesso", $agora, time()+3600);
        echo "<br>";
        echo '<p><a href="limpa_cookie.php">Apagar cookies</a></p>';
    } else {
        echo "<p>Passaram mais do que 30 segundos deste o último acesso.
        Retorne ao formulário para informar seus dados.</p>";
        echo '<p><a href="index.html">Ir para formulário.</a></p>';
    }
} else {
    echo "<p>Não foram localizados cookies. 
            Retorne ao formulário para informar seus dados.</p>";
    echo '<p><a href="index.html">Ir para formulário.</a></p>';
}

echo '</body></html>';

?>
