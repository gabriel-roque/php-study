<?php
//preenche o campo de acordo com a quantidade informada

$nome = "Gabriel";
$new = str_pad($nome, 30, " x", STR_PAD_RIGHT);

print ("Meu nome e $new e tenho 19 anos.");
?>
