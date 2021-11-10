<?php
echo '$varArray = Range("a", "f"); <br>';
$varArray = Range("a", "f");
foreach ($varArray as $item){
    echo $item.'/ ';
}

echo '<hr>';
echo 'Parameters ($var, $offset[0-...], $length = null, $preserve_keys = false)';
echo '<br><br>';


echo '$return = array_slice($varArray, 0, 2); <br>';
$return = array_slice($varArray, 0, 2); // ($var, $offset[0-...], $length = null)
foreach ($return as $item){
    echo $item.'/ ';
}

echo "<br><br>";

echo '$return = array_slice($varArray, 2); <br>';
$return = array_slice($varArray, 2); // ($var, $offset[0-...])
foreach ($return as $item){
    echo $item.'/ ';
}

echo "<br><br>";

echo '$return = array_slice($varArray, -2, 4); <br>';
$return = array_slice($varArray, -2, 4); // ($var, $offset[0-..])
foreach ($return as $item){
    echo $item.'/ ';
}