<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Alura\Doctrine\Entity\Student;
use Alura\Doctrine\Helper\EntityManagerCreator;

$entityManager = EntityManagerCreator::createEntityManager();

$student = $studentRepository->find(Student::class, $argv[1]);
$student->name = $argv[2];

$entityManager->flush();
