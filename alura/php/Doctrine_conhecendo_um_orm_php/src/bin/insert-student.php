<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Alura\Doctrine\Entity\Student;
use Alura\Doctrine\Helper\EntityManagerCreator;

$entityManager = EntityManagerCreator::createEntityManager();

$student = new Student($argv[1]);

$entityManager->persist($student);
$entityManager->flush();