<?php

class Post {
  public int $id;
  public int $likes = 0;
  public array $comments = [];
  private string $author;
  
  public function __construct($postId)
  {
    $this->id = $postId;
    $this->likes = 12 * $postId;
  }
  
  public function aumentarLike()
  {
    $this->likes++;
  }
  
  public function setAuthor($n)
  {
    if(strlen($n) >=3){
      $this->author = ucfirst($n);
    }
  }
  
  public function getAuthor()
  {
    return $this->author ?? '';
  }
}

$post1 = new Post(1);
$post1->setAuthor('Andson');

$post2 = new Post(2);
$post2->setAuthor('Fulano');

echo "POST 1: ".$post1->likes." likes - ".$post1->getAuthor(). PHP_EOL;
echo "POST 1: ".$post2->likes." likes - ".$post2->getAuthor(). PHP_EOL;
