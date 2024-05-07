<?php

require_once 'src/Conta.php';

$primeiraConta = new Conta('123.456.789-00', 'Andson');
$primeiraConta->deposita(500);
$primeiraConta->saca(300);

var_dump($primeiraConta);


echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaSaldo() . PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;


$segundaConta = new Conta('321.654.789-11', 'Andson2');

var_dump($segundaConta);

Echo Conta::recuperaNumeroDeContas();