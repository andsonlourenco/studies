<?php

namespace ScreenMatch\Calculos;

use DivisionByZeroError;
use ScreenMatch\Modelo\Avaliavel;

class ConversorNotasEstrela
{
  public function converte(Avaliavel $avaliavel): float
  {
    try{
      $nota = $avaliavel->media();

      return round($nota) / 2;
    } catch(DivisionByZeroError $erro){
      return 0;
    }
  }
}