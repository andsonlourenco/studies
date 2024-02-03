<?php
$pdo = new PDO("mysql:dbname=test;host=172.20.0.2", "root", "root");

$sql = $pdo->query('SELECT * FROM usuarios');

$dados = $sql->fetchAll(PDO::FETCH_ASSOC);

print_r($dados);