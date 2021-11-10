<?php
interface Forma {
    public function getTipo();
    public function getArea();
}
class Quadrado {
    private $largura;
    private $altura;

    public function __construct($l, $a){
        $this->largura = $l;
        $this->altura = $a;
    }

    public function getTipo(){
        return 'quadrado';
    }

    public function getArea(){
        return $this->largura * $this->altura;
    }
}
class Circulo {
    private $raio;

    public function __construct($r){
        $this->raio = $r;
    }

    public function getTipo(){
        return 'Circulo';
    }

    public function getArea(){
        return pi() * ($this->raio * $this->raio);
    }
}

$quadrado = new Quadrado(5,5);
$circulo = new Circulo(7);

$lista = [
    $quadrado,
    $circulo
];

foreach($lista as $item):
    $tipo = $item->getTipo();
    $area = $item->getArea();

    echo "Área do $tipo : $area <br>";
endforeach;

//  POLIMORFISMO É USAR O METODO DA CLASSE SEM SABER QUAL É A CLASSE USADA
//     - SOBREPOSIÇÃO
//     - SOBRECARGA