<?php
//----------//
echo "<h2>password_hash</h2>";

$password = '123abc';
$hash = password_hash($password, PASSWORD_DEFAULT);

echo "SENHA ORIGINAL: ".$password."<br>";
echo "SENHA CRIPTOGRAFADA: ".$hash."<br>";
echo "<br>";

if(password_verify($password, $hash)){
    echo "verify";
} else {
    echo "invalid";
}
echo "<hr>";

//----------//
echo "<h2>md5</h2>";

$password = 'cba321';
$hash2 = md5($password);

echo "SENHA ORIGINAL: ".$password."<br>";
echo "SENHA CRIPTOGRAFADA: ".$hash2."<br>";
echo "<br>";

if($hash2 === md5($password)){
    echo "verify";
} else {
    echo "invalid";
}

//----------//
