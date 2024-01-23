<?php

$host = "172.22.0.3";
$dbname = "moviestar";
$user = "root";
$pass = "root";


try{
  $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

} catch(PDOException $e) {
  $error = $e->getMessage();
  echo "Error: $error";
}