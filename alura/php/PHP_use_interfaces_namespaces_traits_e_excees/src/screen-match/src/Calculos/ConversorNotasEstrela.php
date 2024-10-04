<?php

class ConversorNotasEstrela
{
  public function converte(Titulo $titulo): float
  {
    $nota = $titulo->media();
    
    return $nota;
  }
}