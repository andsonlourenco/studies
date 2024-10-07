<?php

use ScreenMatch\Calculos\ConversorNotasEstrela;
use ScreenMatch\Modelo\Episodio;
use ScreenMatch\Modelo\Genero;
use ScreenMatch\Modelo\Serie;

require 'autoload.php';

$serie = new Serie('Nome da Serie', 2024, Genero::Acao, 7, 20, 30);
$episodio = new Episodio($serie, 'Piloto', 1);

$conversor = new ConversorNotasEstrela();
echo $conversor->converte($episodio);
