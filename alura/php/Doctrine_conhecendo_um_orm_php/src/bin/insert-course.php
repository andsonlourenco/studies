<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Alura\Doctrine\Helper\EntityManagerCreator;

$entityManager = EntityManagerCreator::createEntityManager();

$course = new \Alura\Doctrine\Entity\Course($argv[1]);

$entityManager->persist($course);
$entityManager->flush();