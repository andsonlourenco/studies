<?php

$string = 'Testes de integração com PHP';
//Ao usar o strlen para retorna a quantidade de caracteres de uma string ele retorna essa quantidade em bits e alguns caracteres tem mais de um bite como o ç por exemplo, ao inves de usar ela pode ser usado o estenção MB_STRING 
echo mb_strlen($string) . PHP_EOL;
echo mb_strtoupper($string);