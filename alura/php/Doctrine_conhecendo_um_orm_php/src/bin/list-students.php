<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Alura\Doctrine\Entity\Student;
use Alura\Doctrine\Helper\EntityManagerCreator;

$entityManager = EntityManagerCreator::createEntityManager();
$studentRepository = $entityManager->getRepository(Student::class);

/** @var Student[] $studentList */
$studentList = $studentRepository->findAll();

foreach ($studentList as $student) {
  echo "ID: $student->id\nNome: $student->name\n\n";
  echo "Telefones:\n";
  foreach ($student->phones() as $phone) {
    echo "  - $phone->number\n";
  }

  echo "\n";
}

// /** @var Student $student */
// $student = $studentRepository->find(1);
// echo $student->name;

// $result = $studentRepository->findBy([
//   'name' => 'Andson Lourenco'
// ]);

// $result = $studentRepository->findOneBy([
//   'name' => 'Andson Lourenco'
// ]);
// var_dump($result);

echo $studentRepository->count([]) . PHP_EOL;