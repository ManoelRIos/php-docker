<?php

include("pedido.php");

$tempUser = new Pedido();
$tempUser->nome = "Hello";
$tempUser->valor = 100;

echo $tempUser->nome;
echo $tempUser->valor;
?>