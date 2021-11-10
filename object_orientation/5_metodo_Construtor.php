<?php

class Post {
    public int $likes = 0;
    public array $comments = [];
    public string $author;

    # Construtor
    public function __construct($qtLikes) {
        $this->likes = $qtLikes;
    }

    public function aumentarLike() {
        echo "abc";
        $this->likes++;
    }
}

$post1 = new Post(25); //parametros do construtor $qtLikes
$post2 = new Post(10); //parametros do construtor $qtLikes

echo "POST 1: ".$post1->likes."<br>";
echo "POST 2: ".$post2->likes."<br>";