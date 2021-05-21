<?php
spl_autoload_register(function ($class_name){
    include $class_name . '.php';
});

echo '<h1>Teste</h1>';
echo '<h2>vai instanciar MyClass1</h2>';
$obj1 = new MyClass1();
echo '<h2>vai instanciar MyClass2</h2>';
$obj2 = new MyClass2();

?>
