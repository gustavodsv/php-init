<?php
// function somar($x, $y){
//     return $x + $y;
// }

# Class create
class Post {
    public $likes = 0;
    public $comments = [];
    public $author;
}

# Object create
$post1 = new Post();
$post1->likes = 3; //definindo valor da variavel da classe

$post2 = new Post();
$post2->likes = 10; //definindo valor da variavel da classe


echo "POST 1: ".$post1->likes."<br>";
echo "POST 2: ".$post2->likes."<br>";