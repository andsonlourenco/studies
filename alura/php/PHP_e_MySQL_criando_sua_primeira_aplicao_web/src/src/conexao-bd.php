<?php 

$user = 'root';
$pass = 'root';

$pdo = new PDO('mysql:host=db;dbname=serenatto', $user, $pass);

var_dump($pdo);