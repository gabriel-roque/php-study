<?php

//Cortar os espaços em excesso ltrim para esquerda e rtrim para direita

$nome = "     Gabriel Roque                 ";
$novo = ltrim($nome);
echo $novo;
echo strlen($novo);

?>
