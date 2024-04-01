<?php
function geraEmail(string $nome): void
{
  $string = <<<FINAL
  Olá $nome!
  
  Estamos entrando em contato para
  {motivo do contato}
  
  {assinatura}
  FINAL;
  
  echo $string;
}

geraEmail();