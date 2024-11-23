<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Alura\Doctrine\Entity\Course;
use Alura\Doctrine\Entity\Student;
use Alura\Doctrine\Helper\EntityManagerCreator;
use \Alura\Doctrine\Entity\Phone;

$entityManager = EntityManagerCreator::createEntityManager();
$studentRepository = $entityManager->getRepository(Student::class);

/** @var Student[] $studentList */
$studentList = $studentRepository->findAll();

foreach ($studentList as $student) {
  echo "ID: $student->id\nNome: $student->name";
  
  if($student->phones()->count() > 0){
    echo "\n";
    echo "Telefones:\n";
    echo implode(', ', $student->phones()->map(fn (Phone $phone) => $phone->number)->toArray());
  }
  if($student->courses()->count() > 0){
    echo "\n";
    echo "Cursos:\n";
    echo implode(', ', $student->courses()->map(fn (Course $course) => $course->name)->toArray());
  }
  echo "\n\n";
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