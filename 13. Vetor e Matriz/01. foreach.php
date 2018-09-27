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

    $var = range(2, 30, 4);
    foreach ($var as $valor){
        echo "$valor ";
    }

    ?>
    </pre>
</div>
</body>
</html>