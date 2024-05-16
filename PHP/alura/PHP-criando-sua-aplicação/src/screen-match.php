<?php

$nomeFilme = "Top Gun - Maverick";
$nomeFilme = "Se beber não case";
$nomeFilme = "Thor: Ragnarok";

$anoLancamento = 2022;

$quantidadeDeNotas = $argc - 1;
$notas = [];

for ($contador = 1; $contador < $argc; $contador++){
  $notas[] = (float) $argv[$contador];
}

$somaDeNotas = 0;
// for ($i = 0; $i < count($notas) ; $i++){
//   $somaDeNotas += $notas[$i];
// }

// foreach($notas as $nota){
//   $somaDeNotas += $nota;
// }

// $contador = 1;
// while ($argv[$contador] !=0){
//   $somaDeNotas += $argv[$contador++];
// }

$notaFilme = array_sum($notas) / $quantidadeDeNotas;
$incluidoNoPlano = true;

echo $notaFilme . PHP_EOL;
echo "Bem-vindo(a) ao screen match!" . PHP_EOL;

if ($anoLancamento > 2022) {
  echo "Esse filme é um lançamento\n";
} elseif($anoLancamento > 2020 && $anoLancamento <= 2022) {
  echo "Esse filme ainda é novo\n";
} else {
  echo "Esse filme não é um lançamento\n";
}

$genero = match ($nomeFilme){
  "Top Gun Maverick" => "ação",
  "Se beber não case" => "comédia",
  "Thor: Ragnarok" => "super-herói",
  default => "gênero desconhecido"
};

echo "O gênero do filme é: $genero";