<?php 
$dsn = "mysql:dbname=blog;host=db";
$dbuser = 'root';
$dbpass = "root";

try{
  $pdo = new PDO($dsn, $dbuser, $dbpass);

  $sql = "DELETE FROM usuarios WHERE id = 6";
  $pdo->query($sql);

  echo "Usuário deletado com sucesso";
 
}catch(PDOException $e){
  echo "Falhou: ".$e->getMessage();
}
?>