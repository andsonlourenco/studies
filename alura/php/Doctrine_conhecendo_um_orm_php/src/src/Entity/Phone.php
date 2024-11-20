<?php

namespace Alura\Doctrine\Entity;

use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\ManyToOne;

#[Entity]
class Phone
{
  #[Id, GeneratedValue, Column]
  public int $id;

  #[ManyToOne(targetEntity: Phone::class, inversedBy: "phones")]
  public readonly iterable $student;

  public function __construct(
    #[Column]
    public readonly string $number
  ) {
  }

  public function setSudent(Student $student): void
  {
    $this->student = $student;
  }
}