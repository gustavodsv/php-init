<?php

echo '<h3>Array Splice - Parameters ($var, $offset[0-...], $length = null, $replacement)</h3>';

echo '$nameArray = ["g","u","x","t","a","v","o","o"]; <br>';
$nameArray = ["g","u","x","t","a","v","o","o"];
foreach ($nameArray as $item){
    echo $item.'/ ';
}
echo '<br><br>';
echo 'Remove "x", remove last "o" and ADD "s" from $nameArray<br><br>';
array_splice($nameArray, 2, 1, "s"); //remove "x"
array_splice($nameArray, -1, 1); // remove "last o";

echo 'array_splice($nameArray, 2, 1, "s"); <br>
array_splice($nameArray, -1, 1);<br><br>';

foreach ($nameArray as $name){
    echo $name.'/ ';
}

