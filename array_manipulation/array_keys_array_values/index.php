<pre>
$varArray = [
    'name' => 'gustavo',
    'age' => 30,
    'company' => 'google',
    'color' => 'orange',
    'occupation' => 'developer'
];
</pre>
<?php
    $varArray = [
        'name' => 'gustavo',
        'age' => 30,
        'company' => 'google',
        'color' => 'orange',
        'occupation' => 'developer'
    ];

    echo "<br>";

    echo 'array_keys($varArray) <br>';
    $varArrayKeys = array_keys($varArray);
    foreach ($varArrayKeys as $key){
        echo $key."/ ";
    }

    echo "<br> <br>";

    echo 'array_values($varArray) <br>';
    $varArrayValues = array_values($varArray);
    foreach ($varArrayValues as $value){
        echo $value."/ ";
    }
?>