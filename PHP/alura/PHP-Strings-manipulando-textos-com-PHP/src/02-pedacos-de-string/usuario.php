<?php

$email = 'andson@localhost.com.br';
$senha = 'ghjkghjkghjkghjk';

//strlen pega o tamanho da string em bits
if(strlen($senha) < 8){
  echo 'Senha insegura' . PHP_EOL;
}

$posicaoDoArroba = strpos($email, '@');

echo substr($email, 0, $posicaoDoArroba);

echo PHP_EOL;

echo substr($email, $posicaoDoArroba + 1);