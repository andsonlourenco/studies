<?php 
$dsn = "mysql:dbname=blog;host=db";
$dbuser = 'root';
$dbpass = "root";

try{
  $pdo = new PDO($dsn, $dbuser, $dbpass);
  
}catch(PDOException $e){
 echo "Erro na conexão ".$e->getMessage();
}

?>