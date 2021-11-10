<?php

class Post {
    # Propriedades tipadas 
    # impedir que uma string substitua um variavel int...
    // int/ array/ string/ float
    public int $likes = 0;
    public array $comments = [];
    public string $author;

    public function aumentarLike() {
        $this->likes++;
    }
}

$post1 = new Post();
$post1->likes = 1;
$post1->comments = ["I don't know!"];
$post1->author = 'gustavo';

$post2 = new Post();
$post1->likes = 0;
$post1->comments = ["I know!"];
$post1->author = 'fulano';


echo "POST 1: ".$post1->comments[0]."<br>";
echo "POST 2: ".$post2->likes."<br>";