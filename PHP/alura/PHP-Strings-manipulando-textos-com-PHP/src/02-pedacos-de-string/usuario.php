<?php

$email = 'andson@localhost.com.br';

$posicaoDoArroba = strpos($email, '@');

echo substr($email, 0, $posicaoDoArroba);

echo PHP_EOL;

echo substr($email, $posicaoDoArroba + 1);