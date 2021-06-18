<?php
# exercício 124 - a

class Adulto {
private $peso = 0.0;

public function engordar($quilos){
   # $this->peso  acessa o atributo $peso
   $this->peso = $this->peso + $quilos;
}

public function emagrecer($quilos){
    $this->peso = $this->peso - $quilos;
}

# setter 
public function setPeso($p){
    $this->peso = $p;
}
# getter
public function getPeso(){
    return $this->peso;
}

}