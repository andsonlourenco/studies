<?php

$host = "172.22.0.2";
$dbname = "testedao";
$user = "root";
$pass = "root";


try{
  $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
  $error = $e->getMessage();
  echo "Error: $error";
}