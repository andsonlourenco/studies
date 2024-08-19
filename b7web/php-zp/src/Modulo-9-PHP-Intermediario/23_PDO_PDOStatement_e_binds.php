<?php 
$dsn = "mysql:dbname=blog;host=db";
$dbuser = 'root';
$dbpass = "root";

try{
  $pdo = new PDO($dsn, $dbuser, $dbpass);

  $nome = 'Fulano';
  $id = 5;

  $sql = "UPDATE usuarios SET nome = :novonome WHERE id = :id";
  $sql = $pdo->prepare($sql);
  $sql->bindValue(':novonome', $nome);
  $sql->bindValue(':id', $id);
  $sql->execute();

  echo "Usuário atualizado com sucesso";
 
}catch(PDOException $e){
  echo "Falhou: ".$e->getMessage();
}
?>