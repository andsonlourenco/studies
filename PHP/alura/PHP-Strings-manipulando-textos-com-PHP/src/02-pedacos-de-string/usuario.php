<?php

$email = 'andson@localhost.com.br';
$senha = 'áẃú';

//strlen pega o tamanho da string em bits
if(strlen($senha) < 8){
  echo 'Senha insegura' . PHP_EOL;
}

$posicaoDoArroba = strpos($email, '@');

$usuario = substr($email, 0, $posicaoDoArroba);

echo mb_strtoupper($usuario) . PHP_EOL;
echo mb_strtolower($usuario) . PHP_EOL;
echo substr($email, $posicaoDoArroba + 1);