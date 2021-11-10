<?php
$arrayNumbers = Range(1,5);

function sum($subtotal, $item){
    $subtotal += $item;
    return $subtotal;
}

$total = array_reduce($arrayNumbers, 'sum');
echo $total."<hr>";


$peoples = [
    ['name'=>'Gustavo', 'gender'=>'M'],
    ['name'=>'Fulano', 'gender'=>'M'],
    ['name'=>'Ciclana', 'gender'=>'F']
];

function sum_m ($subtotal, $item){
    if($item['gender'] === 'M'){
        $subtotal++;
    }
    return $subtotal;
}
$total_m = array_reduce($peoples, 'sum_m');

function sum_f ($subtotal_f, $item){
    if($item['gender'] === 'F'){
        $subtotal_f++;
    }
    return $subtotal_f;
}
$total_f = array_reduce($peoples, 'sum_f');

echo "Men: ".$total_m;
echo "<br>";
echo "Female: ".$total_f; 