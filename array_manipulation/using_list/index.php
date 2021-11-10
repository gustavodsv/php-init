<?php

$arrayInfo = ["gustavo", 30, 'coffee', "milk"];

#1 
// $name = $array[0];
// $age = $array[1];
// $drink1 = $array[2];
// $drink2 = $array[3];

#2
list($name, $age, $drink1, $drink2) = $arrayInfo;

echo "My name is $name, i have $age y, i drink $drink1 with $drink2";