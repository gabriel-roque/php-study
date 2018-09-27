<?php

// nome esta recebendo um string com o caminho completo PATH
$nome = $_SERVER['PHP_SELF'];
$nomeExplode = explode("/",$nome);

// quebra a string aonde tiver / e transforma em array

print_r($nomeExplode);
$ultimo = end($nomeExplode);
echo $ultimo;



?>