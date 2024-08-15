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

//class Calculadora{
//  public $number = 0;
//
//  public function add($value) {
//    $this->number += $value;
//  }
//
//  public function sub($value){
//    $this->number -= $value;
//  }
//  
//  public function multiply($value){
//    $this->number *= $value;
//  }
//  public function divide($value){
//    $this->number /= $value;
//  }
//
//  public function total()
//  {
//    return $this->number;
//  }
//  
//  public function clear(){
//    return $this->number = 0;
//  }
//
//}
//
//$calc = new Calculadora();
//$calc->add(12);
//$calc->add(2);
//$calc->sub(1);
//$calc->multiply(3);
//$calc->divide(2);
//$calc->add(0.5);
//
//echo "TOTAL: ".$calc->total().PHP_EOL;
//
//$calc->clear();
//
//echo "TOTAL: ".$calc->total();

//HERANÇA

//class Post
//{
//  private int $id;
//  private int $likes = 0;
//  
//  public function setId($i){
//    $this->id = $i;
//  }
//  
//  public function getId()
//  {
//    return $this->id;
//  }
//  
//  public function setLikes(int $likes)
//  {
//    $this->likes = $likes;
//  }
//  
//  public function getLikes()
//  {
//    return $this->likes;
//  }
//}
//
//class Foto extends Post{
//  private $url;
//
//  public function __construct($id)
//  {
//    $this->setId($id);
//  }
//
//  public function getUrl()
//  {
//    return $this->url;
//  }
//}
//
//$foto = new Foto(20);
//$foto->setLikes(12);
//
//echo "FOTO: #".$foto->getId()." - " .$foto->getLikes()." Likes";

//INTERFACE

//interface Database {
//  public function listaProduto();
//  public function adicionaProduto();
//  public function alterarProduto();
//}
//class MysqlDB implements Database {
//  public function listaProduto()
//  {
//    
//  }
//  public function adicionaProduto()
//  {
//    
//  }
//  public function alterarProduto()
//  {
//    
//  }
//}

////POLIMORFISMO
//interface Forma
//{
//  public function getTipo();
//  public function getArea();
//}
//class Quadrado {
//  private $largura;
//  private $altura;
//
//  public function __construct($l, $a)
//  {
//    $this->largura = $l;
//    $this->altura = $a;
//  }
//  
//  public function getTipo()
//  {
//    return 'quadrado';
//  }
//  public function getArea()
//  {
//      return $this->largura * $this->altura;
//  }
//}
//
//class Circulo{
//  private $raio;
//  public function __construct($r)
//  {
//    $this->raio = $r;
//  }
//  public function getTipo()
//  {
//   return 'circulo'; 
//  }
//  public function getArea()
//  { 
//    return pi() * ($this->raio * $this->raio);
//  }
//}
//
//$quadrado = new Quadrado(5,5);
//$circulo = new Circulo(7);
//
//$objetos = [
//  $quadrado,
//  $circulo
//];
//
//foreach ($objetos as $objeto) {
//  $tipo = $objeto->getTipo();
//  $area = $objeto->getArea();
//  
//  echo "AREA ".$tipo." : ".$area.PHP_EOL;
//}


