<?php

$telefones = ['(12) 99999 - 9999', '(11) 99999 - 9999', '(13) 2222 - 2221'];

foreach ($telefones as $telefone) {
  $regex = '/^\(([0-9]{2})\) (9?[0-9]{4} - [0-9]{4})$/';
  
  $telefoneValido = preg_match($regex, $telefone, $verificacoes);
  
  var_dump($verificacoes);
  
  if($telefoneValido){
    echo 'Telefone válido' . PHP_EOL;
  } else {
    echo 'Telefone inválido' . PHP_EOL;
  }
  
  echo preg_replace($regex, '(XX) \2', $telefone) . PHP_EOL;
}