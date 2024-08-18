<?php 
$dsn = "mysql:dbname=blog;host=db";
$dbuser = 'root';
$dbpass = "root";

try{
  $pdo = new PDO($dsn, $dbuser, $dbpass);

  $sql = "SELECT * FROM usuarios";
  $sql = $pdo->query($sql);

  if($sql->rowCount() > 0){
   foreach($sql->fetchAll() as $usuario){
    echo "Nome: ".$usuario["nome"]." - ".$usuario["email"]."<br>";
   }
  } else {
    echo "Não há usuários cadastrrados!";
  }
}catch(PDOException $e){
  echo "Falhou: ".$e->getMessage();
}
?>