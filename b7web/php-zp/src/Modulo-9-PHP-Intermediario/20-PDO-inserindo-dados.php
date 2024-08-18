<?php 
$dsn = "mysql:dbname=blog;host=db";
$dbuser = 'root';
$dbpass = "root";

try{
  $pdo = new PDO($dsn, $dbuser, $dbpass);

  $nome = "Teste 2";
  $email = "teste2@localhost.com";
  $senha = md5("123456");

  $sql = "INSERT INTO usuarios SET nome = '$nome', email = '$email', senha = '$senha'";
  $sql = $pdo->query($sql);

  echo "Usuário inserido: ".$pdo->lastInsertId();
 
}catch(PDOException $e){
  echo "Falhou: ".$e->getMessage();
}
?>