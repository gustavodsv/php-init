<?php

class Post {
    public int $likes = 0;
    public array $comments = [];
    private string $author;

    # Construtor
    public function __construct($qtLikes) {
        $this->likes = $qtLikes;
    }

    public function aumentarLike() {
        echo "abc";
        $this->likes++;
    }

    #encapsulamento - set & get
    public function setAuthor($nome){
        if(strlen($nome) > 2){
            $this->author = ucfirst($nome);
        } 
    }
    public function getAuthor(){
        return $this->author ?? "Visitante";
    }
    //
}

$post1 = new Post(25); 
// $post1->author = 'gustavo';
$post1->setAuthor("gustavo");
#
$post2 = new Post(5); 
// $post2->author = 'fulano';
$post2->setAuthor("lu");

echo "POST 1: ".$post1->likes." likes - Author: ".$post1->getAuthor()."<br>";
echo "POST 2: ".$post2->likes." likes - Author: ".$post2->getAuthor()."<br>";