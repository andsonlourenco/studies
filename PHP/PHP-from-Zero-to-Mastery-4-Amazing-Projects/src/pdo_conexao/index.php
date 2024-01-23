<?php

$host = "172.22.0.2";
$dbNAme = "cursophp";
$user = "root";
$pass = "root";
$conn = new PDO("mysql:host=$host;dbname=$dbName", $user, $pass);

// $stmt = $conn->prepare("INSERT INTO pessoas (nome, idade) VALUES (:nome, :idade)");

// $nome = "Usuario criando pelo PDO";
// $idade = 20;

// $stmt->bindParam(":nome", $nome);
// $stmt->bindParam(":idade", $idade);

// $stmt->execute();


// $id = 5;
// $nome = "Teclado Microsoft";
// $descricao = "Este teclado e novo";

// $stmt = $conn->prepare("UPDATE itens SET nome = :nome, descricao = :descricao WHERE id = :id");

// $stmt->bindParam(":id", $id);
// $stmt->bindParam(":nome", $nome);
// $stmt->bindParam(":descricao", $descricao);

// $stmt->execute();


$id = 5;
$stmt = $conn->prepare("SELECT * FROM itens WHERE id > :id");
$stmt->bindParam(":id", $id);
$stmt->execute();
$data = $stmt->fetch(PDO::FETCH_ASSOC);

print_r($data);

$itens = $stmt->fetchAll(PDO::FETCH_ASSOC);
print_r($itens);