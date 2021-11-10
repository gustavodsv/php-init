<?php
 
class Calculadora {
    public $total=0;
    public float $add;
    public float $sub;
    public float $mult;
    public float $div;
    public float $clear;

    public function add($n){
        $this->total += $n;
        return $this->total;
    }
    public function sub($n){
        $this->total -= $n;
        return $this->total;
    }
    public function mult($n){
        $this->total *= $n;
        return $this->total;
    }
    public function div($n){
        $this->total /= $n;
        return $this->total;
    }
    public function clear(){
        return $this->total = 0;
    }
}

$calc = new Calculadora();
$calc->add(12);
$calc->add(2);
$calc->sub(1);
$calc->mult(3);
$calc->div(2);
$calc->add(0.5);

echo $calc->total;

$calc->clear();