<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<div>
    <!-- Tag PRE serve para facil visualização -->
<pre>
    <?php

    $var = array(8,96,9,4,21,87);
    print_r($var);
    var_dump($var); //+ moastra o tipo de conteudo de variavel
    echo "Array possui ".count($var)." elementos"; //mostra a quantidade de elementos

    ?>
</pre>
</div>
</body>
</html>