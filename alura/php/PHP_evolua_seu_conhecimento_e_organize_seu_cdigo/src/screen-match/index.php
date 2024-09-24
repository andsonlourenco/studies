<?php
require __DIR__ . "/funcoes.php";

echo "Bem-vindo(a) ai screen match! <br>";

$nomeFilme = "Top GUn - Maverick";
$nomeFilme = "Thor: Ragnarok";
$nomeFilme = "Se beber não case";

$anoLancamento = $argv[1] ?? 2022;

$quantidadeDeNotas = $argc - 1;
$notas = [];

for ($contador = 1; $contador < $argc; $contador++ ) {
  $notas[] += (float) $argv[$contador];
}

$notaFilme = array_sum($notas) / $quantidadeDeNotas;
$planoPrime = true;

$incluidoNoPlano = incluidoNoPlano($planoPrime, $anoLancamento);

echo "Nome do filme: ". $nomeFilme ."\n";
echo "Nota do filme: $notaFilme \n";
echo "Ano de lançamento: $anoLancamento\n";

exibeMensagemLancamento($anoLancamento);

$genero = match ($nomeFilme){ 
  "Top Gun - Maverick" => "ação",
  "Thor: Ragnarok" => "super-herói",
  "Se beber não case" => "comédia",
  default => "gênero desconhecido",
};

echo "O gênero do filme é: $genero \n";

$filme = criaFilme(
  nome:"Thor: Ragnarok", 
  anoLancamento: 2021, 
  nota: 7.8, 
  genero: "super-herói"
);

$posicaoDoisPontos  =strpos($filme['nome'], ':');
var_dump($posicaoDoisPontos);

var_dump(substr($filme['nome'], 0, $posicaoDoisPontos));
echo "<br />";
echo json_encode($filme);
echo "<br />";
var_dump(json_decode('{"nome":"Thor: Ragnarok","ano":2021,"nota":7.8,"genero":"super-her\u00f3i"}'), true);

//$filmeComoStringJson = json_encode($filme);
//file_put_contents(__DIR__ .'/filme.json', $filmeComoStringJson);