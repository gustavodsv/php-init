<?php

interface MatematicaBasica{
    public function somar($x,$y);
}

class Basico1 implements MatematicaBasica{
    public function somar($x,$y){
        return $x+$y;
    }
}

class Matematica {
    private $basico;

    public function __construct($b){
        $this->basico = $b;
    }
    public function somar($x,$y){
        return $this->basico->somar($x,$y);
    }
}
