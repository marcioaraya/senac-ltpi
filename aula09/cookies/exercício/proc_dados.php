<?php
 
$v_usuario = $_GET["nome"];
$v_idade = $_GET["idade"];

setcookie("c_usuario", $v_usuario, time()+3600);
setcookie("c_idade", $v_idade,  time()+3600);
setcookie("c_acesso", time(),  time()+3600);
setcookie("c_ultimo_acesso", time(), time()+3600);

echo "time:".time()."<br>";
echo "".date('d-m-Y H:i:s', time())."<br>";

$_COOKIE["c_usuario"]="TESTE";

echo '<html><body>';
echo 'Ola! '.$v_usuario;
echo '<br>';

echo 'Sua idade:'.$v_idade;
echo '<br><br>';
echo '<a href="le_cookie.php">Ler dados gravados nos cookies</a>';
echo '</body></html>';

?>
