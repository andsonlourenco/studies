<?php
//
//class Post {
//  public int $id;
//  public int $likes = 0;
//  public array $comments = [];
//  private string $author;
//  
//  public function __construct($postId)
//  {
//    $this->id = $postId;
//    $this->likes = 12 * $postId;
//  }
//  
//  public function aumentarLike()
//  {
//    $this->likes++;
//  }
//  
//  public function setAuthor($n)
//  {
//    if(strlen($n) >=3){
//      $this->author = ucfirst($n);
//    }
//  }
//  
//  public function getAuthor()
//  {
//    return $this->author ?? '';
//  }
//}
//
//$post1 = new Post(1);
//$post1->setAuthor('Andson');
//
//$post2 = new Post(2);
//$post2->setAuthor('Fulano');
//
//echo "POST 1: ".$post1->likes." likes - ".$post1->getAuthor(). PHP_EOL;
//echo "POST 1: ".$post2->likes." likes - ".$post2->getAuthor(). PHP_EOL;

//class Matematica 
//{
//  public static function somar($x, $y)
//  {
//    return $x + $y;    
//  }
//}
//
//echo Matematica::somar(10, 20);

class Calculadora{
  public $number = 0;

  public function add($value) {
    $this->number += $value;
  }

  public function sub($value){
    $this->number -= $value;
  }
  
  public function multiply($value){
    $this->number *= $value;
  }
  public function divide($value){
    $this->number /= $value;
  }

  public function total()
  {
    return $this->number;
  }
  
  public function clear(){
    return $this->number = 0;
  }

}

$calc = new Calculadora();
$calc->add(12);
$calc->add(2);
$calc->sub(1);
$calc->multiply(3);
$calc->divide(2);
$calc->add(0.5);

echo "TOTAL: ".$calc->total().PHP_EOL;

$calc->clear();

echo "TOTAL: ".$calc->total();