<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício de Fixação 7- versão 2</title>
</head>
<body>
<h1>Versão 2</h1>

<p>Identifica e guarda as posições quando o número 10 aparece mais de 
   uma vez no vetor
</p>


<p>Escreva um programa PHP que percorra o vetor $numero verifique se o valor 10 
está contido em alguma posição do vetor. Caso exista, exiba a mensagem 
“O número 10 está contido na posição $i do vetor” se não existir exiba a mensagem 
“Não foi localizado o número 10 no vetor”. Utilize a instrução foreach. Use os valores do exercício 6. 
Depois, experimente testar com outros valores:</p>


<?PHP 
 $numero = array(5, 11, 10, 8, 10, 10, 10, 99, 50);
 $posicao=array();

 foreach($numero as $i => $v){
 
    if ($v==10) {
        $posicao[] = $i;
    }
  
 }  

 if(count($posicao) > 0  ) {
    foreach($posicao as $p) {
        echo 'O número 10 está contido na posição ' .$p. ' de vetor '. "<br>";
    }

 } else  { 
     echo 'Não foi localizado o número 10 no vetor';
  }

    
  ?>
</body>
</html>