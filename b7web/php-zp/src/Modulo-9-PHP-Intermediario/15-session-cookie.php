<?php 
session_start();

//Gerar uma sessão
$_SESSION['teste'] = "Andson";
echo "Minha sessão é de: ".$_SESSION['teste'];

//Gerar um cookie
setcookie("meuteste", "Fulano de tal", time()+3600);
echo "meu cookie é de: ".$_COOKIE["meuteste"];
?>