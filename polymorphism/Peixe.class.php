<?php
require_once "Animal.class.php";

class Peixe extends Animal{
    private string $corEscama;
    public function locomover(){
        echo "Nadando";
    }
    public function alimentar(){
        echo "Comendo susbtâncias";
    }
    public function emitirSom(){
        echo "Peixe não faz som";
    }
    public function soltarBolha(){
        echo "Soltou uma Bolha";
    }

public function getCorEscama() {
    return $this->corEscama;
}

public function setCorEscama($corEscama) {
    $this->corEscama = $corEscama;
}
}