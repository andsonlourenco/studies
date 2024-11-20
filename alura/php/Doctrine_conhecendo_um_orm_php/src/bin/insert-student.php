<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Alura\Doctrine\Entity\Phone;
use Alura\Doctrine\Entity\Student;
use Alura\Doctrine\Helper\EntityManagerCreator;

$entityManager = EntityManagerCreator::createEntityManager();

$phone1 = new Phone('11999999999');
$phone2 = new Phone('11999999999');
$entityManager->persist($phone1);
$entityManager->persist($phone2);

// $student = new Student($argv[1]);
$student = new Student('Aluno com telefones');
$student->addPhone($phone1);
$student->addPhone($phone2);

$entityManager->persist($student);
$entityManager->flush();