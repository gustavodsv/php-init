<?php
class Post {
    private int $id;
    private int $likes=0;

    public function setId($i){
        $this->id = $i;
    }
    public function getId(){
        return $this->id;
    }

    public function setLikes($l){
        $this->likes = $l;
    }
    public function getLikes(){
        return $this->likes;
    }
}

class Foto extends Post { // uso de extends para herdar caracteristicas de outras classe
    private $comments;

    public function __construct($id) {
        $this->setId($id); // setId é uma herança de Post
    }

    public function setComments($u) {
        $this->comments = $u;
    }
    public function getComments() {
        return $this->comments;
    }
}

$foto = new Foto(20);
$foto->setLikes(12);
$foto->setComments("'hahaha'");

echo "Foto: #".$foto->getId()." - ".$foto->getlikes()." likes - Comentarios: ".$foto->getComments();
