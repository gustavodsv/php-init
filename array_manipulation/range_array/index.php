<?php
    echo "<h4>Arrays( )</h4>";
    echo '$var = [ 0,1,2,3,4,5 ]; <br>';
    $variavelArray = [0,1,2,3,4,5];
    foreach ($variavelArray as $item){
        echo "$item ";
    }
    echo "<br><br>";

    echo '$var = array( 0,1,2,3,4,5,6,7,8,9 ); <br>';
    $variavelArray2 = array(0,1,2,3,4,5,6,7,8,9);
    foreach ($variavelArray2 as $item){
        echo "$item ";
    }
    
    echo "<hr>";

    echo "<h4>Array( ) with Range( )</h4>";
    echo '$var = Range(0, 20) <br>'; // par1 = start, par2 = end
    $varRange = Range(0, 20); //array 0 to 20
    foreach ($varRange as $item){
        echo "$item ";
    }
    echo "<br><br>";
    echo '$var = Range(0, 20, 2) <br>'; // par1 = start, par2 = end, par3 = leap
    $varRange = Range(0, 20, 2); //array 0 to 20
    foreach ($varRange as $item){
        echo "$item ";
    }

    echo "<hr>";

    echo "<h4>Abc arrays with Range( )</h4>";
    echo '$var = Range("a", "z") <br>'; // par1 = start, par2 = end, par3 = leap
    $varRangeAbc = Range('a', 'z'); //array 0 to 20
    foreach ($varRangeAbc as $item){
        echo "$item ";
    }

?>