<?php
require_once "Lobo.class.php";

class Cachorro extends Lobo {
    public function emitirSom(){
        echo "<p>Au Au Au</p>";
    }
    function reagirFrase($frase){
        if($frase == "Toma Comida" || $frase == "Olá"){
            echo "<p>Abanar e Latir</p>";
        } else {
            echo "<p>Rosnar</p>";
        }
    }
    function reagirHora($hora, $min=0){
        if($hora<12){
            echo "<p>Abanar</p>";
        } elseif ($hora >= 18){
            echo "<p>Ignorar</p>";
        } else {
            echo "<p>Abanar e Latir</p>";
        }
    }
    function reagirDono($dono){
        if($dono){
            echo "<p>Abanar e Latir</p>";
        } else {
            echo "<p>Rosnar e Latir</p>";
        }
    }
    function reagirIdade($idade, $peso){
        if($idade < 5){
            if($peso < 10) {
                echo "<p>Abanar</p>";
            } else {
                echo "<p>Latir</p>";
            }
        } else {
            if ($peso< 10) {
                echo "<p>Rosnar</p>";
            } else {
                echo "<p>Ignorar</p>";
            }
        }
    }
}