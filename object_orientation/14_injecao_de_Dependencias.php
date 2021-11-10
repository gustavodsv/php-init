<?php
#INJEÇÃO DE DEPENDENCIAS - quando usa-se uma classe dentro de outra classe pode ser através do construtor

interface MatematicaBasica{
    public function somar($x,$y);
}

class Basico1 implements MatematicaBasica{
    public function somar($x,$y){
        return $x+$y;
    }
}

class Basico2 {
    public function somar($x,$y){
        $res = $x;
        for($q=0;$q<$y;$q++){
            $res++;
        }
        return $res;
    }
}

class Basico3 implements MatematicaBasica{
    public function somar($x,$y){
        return "não esta somando";
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

$basico = new Basico3();
$mat = new Matematica($basico);
echo $mat->somar(10,15);



?>
