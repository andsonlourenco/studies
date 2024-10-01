<?php
require __DIR__ . "/src/Modelo/Filme.php";

echo "Bem-vindo() ao ScreenMatch\n";

$filme = new Filme(
  'Thor - Ragnarok',
  2021,
  'super-heroi'
);

$filme->avalia(10);
$filme->avalia(6);
$filme->avalia(7.8);
$filme->avalia(8.2);

var_dump($filme);

echo $filme->media();

echo $filme->anoLancamento();
