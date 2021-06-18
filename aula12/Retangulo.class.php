<?php

class Retangulo {

    private $ladoMaior=0.0;
    private $ladoMenor=0.0;

    public function setLadoMaior($maior) {
        $this->ladoMaior = $maior;
    }

    public function setLadoMenor($menor) {
       $this->ladoMenor = $menor;
    }

    public function calculaArea(){
        return $this->ladoMenor*$this->ladoMaior;
    }
}