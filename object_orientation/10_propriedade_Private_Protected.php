<?php
class Post {
    private int $id;
    private int $likes = 0;

    protected function setId($i){
        $this->id = $i;
    }
    public function getId(){
        return $this->id;
    }

    protected function setLikes($l){
        $this->likes = $l;
    }
    public function getLikes(){
        return $this->likes;
    }
}

class Foto extends Post {
    private $comments;

    public function __construct($id, $l, $c) {
        $this->setId($id); 
        $this->setLikes($l);
        $this->setComments($c);
    }

    public function setComments($c) {
        $this->comments = $c;
    }
    public function getComments() {
        return $this->comments;
    }
}

$foto = new Foto(20, 500, "'hahaha'");
echo "Foto: #".$foto->getId()." - ".$foto->getlikes()." likes <br>- Comentario: ".$foto->getComments();
echo "<br><br>";

$foto2 = new Foto(21, 200, "'o melhor!'");
echo "Foto: #".$foto2->getId()." - ".$foto2->getlikes()." likes <br>- Comentario: ".$foto2->getComments();

