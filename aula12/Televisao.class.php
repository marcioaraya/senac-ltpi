<?php

class Televisao {
    private $status;
    private $canal;
    private $volume;

    # um dos métodos 'mágicos'
    # chamado ao criar uma instância desta classe    
    public function __construct(){
        $this->status = false;
        $this->canal = 3;
        $this->volume = 10;
    }

    public function ligaDesliga(){
        # ! - negação
        $this->status = !$this->status;
        # usando operador ternário
        # $this->status = $this->status?false:true;

        # usando if 
        /*
        if ($this->status == true){
            $this->satus = false;
        } else {
            $this->status = true;
        }
        */
    }

    public function aumentaCanal(){
        $this->canal++;
    }
    public function diminuiCanal(){
        $this->canal--;
    }

    public function aumentaVolume(){
        $this->volume++;
    }
    public function diminuiVolume(){
        $this->volume--;
    }

    public function mostraCanal(){
        return $this->canal;
    }

    public function mostraVolume(){
        return $this->volume;
    }

}