<?php

echo "Bem-vindo(a) ai screen match! <br>";

$nomeFilme = "Top GUn - Maverick";
$anoLancamento = $argv[1] ?? 2022;

$somaDeNotas = 9;
$somaDeNotas += 6;
$somaDeNotas += 8;
$somaDeNotas += 7.5;
$somaDeNotas += 5;

$notaFilme = $somaDeNotas / 5;
$planoPrime = true;
$incluidoNoPlano = $planoPrime || $anoLancamento < 2020;

echo "Nome do filme: ". $nomeFilme ."\n";
echo "Nome do nota: $notaFilme \n";
echo "Ano de lançamento: $anoLancamento\n";