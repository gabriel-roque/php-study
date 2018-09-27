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
//ADD NO FINAL
//    $var[] = 22; // add no final automático ou
    array_push($var, 99);
    print_r($var);
// REMOVE NO FINAL
    array_pop($var);
    print_r($var);
//  ADD NO INICIO
    array_unshift($var, 122);
    print_r($var);
//  REMOVE NO INICIO
    array_shift($var);
    print_r($var);

    ?>
    </pre>
</div>
</body>
</html>