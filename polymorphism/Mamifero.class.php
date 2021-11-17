<?php
require_once "Animal.class.php";

class Mamifero extends Animal{
    private string $corPelo;
    public function locomover(){
        echo "<p>Correndo</p>";
    }
    public function alimentar(){
        echo "<p>Mamando</p>";
    }
    public function emitirSom(){
        echo "<p>Som de mamifero</p>";
    }

    public function getCorPelo() {
        return $this->corPelo;
    }

    public function setCorPelo($corPelo) {
        $this->corPelo = $corPelo;
    }
}