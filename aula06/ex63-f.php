<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <h1> Item f</h1>
    <?php
     unset($p);
     $p[] = "Joaquim";
     $p[] = "Lindalva";
     $p[] = "Ribamar";
     $p[] = "Beatriz";
     $p[] = "Carlos";
     $p[] = "Carlos José";
     $p[] = "Beatriz";
     $quant = count($p);
     echo "Quant.".$quant."<br>";
     unset($p[2]);
     foreach($p as $s){
         echo $s. "<br>";
     }
     echo '<hr>';
     $v = array_unique($p);
     foreach($v as $r){
         echo $r. "<br>";
     }
    ?>
</body>
</html>
