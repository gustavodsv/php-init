<?php

class Post {
    # Propriedades (caracteristicas da classe)
    // types: public/ pravate/ protected
    public $likes = 0;
    public $comments = [];
    public $author;
    ## fim das propriedades ##

    # Método
    public function aumentarLike() {
        $this->likes++;
    }
}

$post1 = new Post();
$post1->likes = 10;
$post1->aumentarLike(); //

$post2 = new Post();
$post2->aumentarLike();


echo "POST 1: ".$post1->likes."<br>";
echo "POST 2: ".$post2->likes."<br>";