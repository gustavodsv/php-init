<?php 
require_once "Mamifero.class.php";
require_once "Reptil.class.php";
require_once "Peixe.class.php";
require_once "Ave.class.php";

require_once "Canguru.class.php";
require_once "Cachorro.class.php";
require_once "Cobra.class.php";
require_once "Tartatura.class.php";
require_once "PeixeDourado.class.php";
require_once "Arara.class.php";
require_once "Lobo.class.php";


echo "<h1>POLIMORFISMO</h1>";
echo "<br>";
# POLIMORFISMO acontece quando substituimos um método de uma superclasse na sua subclasse, usando a mesma assinatura.

# POLIMORFISMO DE SOBREPOSIÇÃO: Mesma assinatura / feita em Classes Diferentes
# POLIFORMISMO DE SOBRECARGA: Assinaturas Diferentes / feitas na mesma Classe

// $m = new Mamifero();
// $a = new Ave();
// $r = new Reptil();
// $p = new Peixe();

// $k = new Cachorro();
// $c = new Canguru();
// $t = new Tartaruga();
// $l = new Lobo();

// $m->locomover(); //correndo
// $a->locomover(); // voando
// $r->locomover(); // rastejando
// $p->locomover(); // nadando

// echo "<hr>";

// $m->alimentar(); // mamando
// $a->alimentar(); // comendo frutas
// $r->alimentar(); // comendo vegetais
// $p->alimentar(); // comendo substancias

// echo "<hr>";

// $k->locomover();
// $c->locomover();
// $t->locomover();

// echo "<hr>";

// $k->emitirSom();
// $l->emitirSom();

// echo "<hr>";

$k = new Cachorro();
$k->emitirSom();

$k->reagirFrase("Olá"); // Abanar e Latir
$k->reagirFrase("Vai apanhar"); // Rosnar
$k->reagirHora(11,4); // Abanar
$k->reagirHora(21); // ignorar
$k->reagirDono(true); // abanar e latir
$k->reagirDono(false); // abanar e Latir
$k->reagirIdade(2, 12.5); // latir
$k->reagirIdade(17, 4.5); // rosnar