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
//  CRESCENTE
    $var = array(8,96,9,4,21,87);
    sort($var);
    print_r($var);
//  DECRESCENTE
    rsort($var);
    print_r($var);
//  CRESCENTE MUDANDO OS INDICES DE ORDEM
    asort($var);
    print_r($var);
//  ORDENACAO POR CHAVES
    ksort($var);
    print_r($var);
//  ORDENACAO POR CHAVES REVERSA
    krsort($var);
    print_r($var);

    ?>
    </pre>
</div>
</body>
</html>