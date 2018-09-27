<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
    function soma(){
        $p = func_get_args(); // cria um array contendo todos os argumentos
        $t = func_num_args(); // retorna a quantidade de argumetos existentes
        $s = 0;

        for ($i = 0; $i < $t; $i++){
            $s += $p[$i]; // a cada laco minha sola recebe valores contidos dentro do array
        }
        return $s;
    }

    $r = soma(10, 20, 20, 1);

    echo $r;

?>
</body>
</html>