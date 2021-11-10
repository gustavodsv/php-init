<?php
class Matematica {
    public static string $nome = 'gustavo';

    # função estatica
    public static function somar($x, $y){
        return $x+$y;
    }
}

# objeto
// $m = new Matematica();
// echo $m->somar(20,30);


# função estatica, é possivel chama-la sem criar um objeto
echo Matematica::$nome;
echo Matematica::somar(20,30);