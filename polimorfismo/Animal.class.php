<?php

# classes abstratas servem para fins de herança
abstract class Animal {
    protected float $peso;
    protected int $idade;
    protected int $membros;
    abstract public function locomover();
    abstract public function alimentar();
    abstract public function emitirSom();
    function getPeso(){
        return $this->peso;
    }
    function getIdade(){
        return $this->idade;
    }
    function getMembros(){
        return $this->membros;
    }
    function setPeso($peso){
        $this->peso = $peso;
    }
    function setIdade($idade){
        $this->idade = $idade;
    }
    function setMembros($membros) {
        $this->membros = $membros;
    }
}

?>