<?php
require_once "Animal.class.php";

class Reptil extends Animal{
    private string $corEscama;
    public function locomover(){
        echo "<p>Rastejando</p>";
    }
    public function alimentar(){
        echo "<p>Comendo vegetais</p>";
    }
    public function emitirSom(){
        echo "<p>Som de Réptil</p>";
    }
    public function getCorEscama() {
        return $this->corEscama;
    }

    public function setCorEscama($corEscama) {
        $this->corEscama = $corEscama;
}
}