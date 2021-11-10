<?php
spl_autoload_register(function($paramClass){
    #para evitar o erro caso não encontre
    if(file_exists('17_'.$paramClass.'.class.php')){
        require '17_'.$paramClass.'.class.php';
    }
});


$m = new Matematica(new Basico1());
echo $m->somar(5,5);

$x = new Algo();
