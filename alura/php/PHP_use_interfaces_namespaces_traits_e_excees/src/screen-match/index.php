<?php

require __DIR__ . '/src/Modelo/Avaliavel.php';
require __DIR__ . '/src/Modelo/Genero.php';
require __DIR__ . '/src/Modelo/Titulo.php';
require __DIR__ . '/src/Modelo/Episodio.php';
require __DIR__ . "/src/Modelo/Filme.php";
require __DIR__ . "/src/Modelo/Serie.php";
require __DIR__ . "/src/Calculos/CalculadoraDeMaratona.php";
require __DIR__ . "/src/Calculos/ConversorNotasEstrela.php";

echo "Bem-vindo() ao ScreenMatch\n";

$filme = new Filme(
  'Thor - Ragnarok',
  2021,
  Genero::SuperHeroi,
  180
);

$filme->avalia(10);
$filme->avalia(6);
$filme->avalia(7.8);
$filme->avalia(8.2);

var_dump($filme);

echo $filme->media();

echo $filme->anoLancamento();

$serie = new Serie('Lost', 2007, Genero::Drama, 10, 20, 30);
$episodio = new Episodio($serie, 'Epísodio piloto', 1);

echo $serie->anoLancamento . '\n';
$serie->avalia(8);
echo $serie->media() . '\n';


$calculadora = new CalculadoraDeMaratona();
$calculadora->inclui($filme);
$calculadora->inclui($serie);
$duracao = $calculadora->duracao();

echo "Para essa maratona, você precisa de $duracao minutos";

$conversor = new ConversorNotasEstrela();
echo $conversor->converte($serie);
echo $conversor->converte($filme);