<?php 
$dsn = "mysql:dbname=blog;host=db";
$dbuser = 'root';
$dbpass = "root";

try{
  $pdo = new PDO($dsn, $dbuser, $dbpass);
  echo "Conected";
}catch(PDOException $e){
  echo "Falhou: ".$e->getMessage();
}

?>