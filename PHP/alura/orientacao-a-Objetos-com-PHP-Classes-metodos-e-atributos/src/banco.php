<?php

require_once 'src/Conta.php';
require_once 'src/Titular.php';
require_once 'src/CPF.php';

$andson = new Titular(new CPF('123.456.789-00'), 'Andson');
$primeiraConta = new Conta($andson);
$primeiraConta->deposita(500);
$primeiraConta->saca(300);

var_dump($primeiraConta);


echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaSaldo() . PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;

$andson2 = new Titular(new CPF('321.654.789-11'), 'Andson2');
$primeiraConta = new Conta($andson2);

var_dump($andson2);

Echo Conta::recuperaNumeroDeContas();