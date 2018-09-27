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

    $var = array(4 => "A", 8 => "D", 1 => "F");
    $var[] = "E"; //add
    print_r($var);

    unset($var[4]); // desalocar um valor do array
    print_r($var);

    ?>
    </pre>
</div>
</body>
</html>