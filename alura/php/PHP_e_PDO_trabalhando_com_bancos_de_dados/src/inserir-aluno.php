<?php

use Alura\Pdo\Domain\Model\Student;

require_once 'vendor/autoload.php';

$databasePath = __DIR__ . '/banco.sqlite';
$pdo = new PDO('sqlite:'. $databasePath);

$student = new Student(null, 'Andson', new \DateTimeImmutable('1992-11-19'));

$sqlInsert = "INSERT INTO students (name, birth_date) VALUES (?, ?)";
$statement = $pdo->prepare($sqlInsert);
$statement->bindValue(1, $student->name());
$statement->bindValue(2, $student->birthDate()->format('Y-m-d'));

if($statement->execute()){
  echo "Alunos Incluido!";
}