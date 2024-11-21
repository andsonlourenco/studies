<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Alura\Doctrine\Entity\Phone;
use Alura\Doctrine\Entity\Student;
use Alura\Doctrine\Helper\EntityManagerCreator;

$entityManager = EntityManagerCreator::createEntityManager();

$student = new Student('Aluno com telefones');
$student->addPhone(new Phone('11999999999'));
$student->addPhone(new Phone('11999999999'));

$entityManager->persist($student);
$entityManager->flush();