<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<?php

/*
 A diferenca entre INCLUDE ou REQUIRE
Um executa o script mesmo nao conseguindo carregar o arquivo externo, porem
em require ele so executa se carregar o arquivo externo
 */


//include "Script02_func.php"; // comando para importar (executa sem carregar o arquivo externo)
require "Script02_func.php"; // o script nao executa se nao carregar o arquivo externo
/*
require_once ou
include_once

serve para ser incluido apenas uma vez se precisar carregar varias vezes

*/

teste();

?>
</body>
</html>