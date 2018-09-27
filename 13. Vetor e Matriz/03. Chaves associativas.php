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

    $cad = array("nome" => "Gabriel",
                "idade" => 19,
                "peso" => 63.5);

    foreach ($cad as $campo => $valor){
        echo "O valor de $campo é $valor </br>";
    }
    ?>
    </pre>
</div>
</body>
</html>