<?php

use Alura\Pdo\Domain\Model\Student;
use Alura\Pdo\Infrastructure\Persistence\ConnectionCreator;
use Alura\Pdo\Infrastructure\Repository\PdoStudentRepository;

require_once 'vendor/autoload.php';

$connection = ConnectionCreator::createConnection();
$studentRepository = new PdoStudentRepository($connection);

$connection->beginTransaction();

try {
  $aStudent = new Student(null, 'Aluno 1', new DateTimeImmutable('1994-05-01'));
  $studentRepository->save($aStudent);

  $anotheStudent = new Student(null, 'ALuno 2', new DateTimeImmutable('1995-05-01'));
  $studentRepository->save($anotheStudent);
  $connection->commit();

} catch (\PDOException $e){
  echo $e->getMessage();
  $connection->rollBack();
}

