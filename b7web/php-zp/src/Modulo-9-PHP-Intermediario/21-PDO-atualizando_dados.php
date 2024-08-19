<?php 
$dsn = "mysql:dbname=blog;host=db";
$dbuser = 'root';
$dbpass = "root";

try{
  $pdo = new PDO($dsn, $dbuser, $dbpass);

  $sql = "UPDATE usuarios SET email = 'adc@hotmail.com' WHERE email = 'teste3@localhost.com'";
  $sql = $pdo->query($sql);

  echo "Usuario alterado com sucesso!";
 
}catch(PDOException $e){
  echo "Falhou: ".$e->getMessage();
}
?>