<?php

class Post {
  public int $id;
  public int $likes = 0;
  public array $comments = [];
  public string $author;
  
  public function __construct($postId)
  {
    $this->id = $postId;
    $this->likes = 12 * $postId;
  }
  
  public function aumentarLike()
  {
    $this->likes++;
  }
}

$post1 = new Post(1);

$post2 = new Post(2);

echo "POST 1: ".$post1->likes. PHP_EOL;
echo "POST 2: ".$post2->likes. PHP_EOL;