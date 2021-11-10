<?php
$varArray = [
    'name' => 'Gustavo',
    'age' => 30,
    'company' => 'google',
    'color' => 'orange',
    'occupation' => 'developer'
];

echo "array_key_exists == key_exists <br><br>";


if(key_exists('age', $varArray)){
        $age = $varArray['age'];
        echo "age: $age";
} else {
    echo "Age: undefined";
}
echo "<br><br>";
if(key_exists('idade', $varArray)){
    $age = $varArray['idade'];
    echo "age: $age";
} else {
echo "Age: undefined";
}
?>