<!DOCTYPE html>
<html>
<body>

<h2>Text input fields</h2>

<!--
    action = indica o programa que irá receber os dados do formulário
             se não for informado, os dados irão para a mesma página
             que tem o código do formulário
    method = Pode assumir dois valores:
             - GET: 
               - os dados informados no formulário aparecem na
                barra de endereço do navegador
               - tem limitação na quantidade de dados que pode 
                transferir do formulário para o servidor (2048 bytes)
             - POST:
               - os dados informados no formulário NÃO aparecem na
                barra de endereço do navegador
               - não tem limitação na quantidade de dados que pode
                transferir para o servidor.
-->
<form action="trata_formulario1.php" method="POST">
  <label for="fname">Nome:</label><br>
  <input type="text" id="fname" name="nome" value=""><br>
 
  <label for="lname">Sobrenome:</label><br>
  <input type="text" id="lname" name="sobrenome" value="">
  <br>
  <input type="submit" value="Enviar">
</form>

<p>Note that the form itself is not visible.</p>

<p>Also note that the default width of text input fields is 20 characters.</p>

</body>
</html>
