<?php
class Sequencia {
    # atributos -> 
    # ATENÇÃO!!!! precisa usar o $this-> para acessar os atributos e métodos
    # dentro da classe
    private $inicio; # 1
    private $fim;    # 5

    # métodos
    public function setInicio($inicio){
        $this->inicio = $inicio;
    }

    public function setFim($fim){
        $this->fim = $fim;
    }

    public function exibirTodosNumeros(){
        for($i = $this->inicio; $i <= $this->fim; $i++){
            echo "<p>$i</p>";
        }
    }

    public function exibirPares(){
        for($i = $this->inicio; $i <= $this->fim; $i++){
            if ($this->ehPar($i)){
                echo "<p>$i</p>";
            }
        }        
    }

    public function exibirImpares(){
        for($i = $this->inicio; $i <= $this->fim; $i++){
            if (!$this->ehPar($i)){
                echo "<p>$i</p>";
            }
        }
    }

    private function ehPar($n){
        if($n%2==0){
            return 1;
        } else {
            return 0;
        }


    }


}