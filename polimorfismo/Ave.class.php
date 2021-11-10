<?php
require_once "Animal.class.php";

class Ave extends Animal{
    private string $corPena;
    public function locomover(){
        echo "Voando";
    }
    public function alimentar(){
        echo "Comendo frutas";
    }
    public function emitirSom(){
        echo "Som de ave";
    }
    public function fazerNinho(){
        echo "Fazendo ninho";
    }

    public function getCorPena() {
        return $this->corPena;
    }

    public function setCorPena($corPena) {
        $this->corPena = $corPena;
    }
}