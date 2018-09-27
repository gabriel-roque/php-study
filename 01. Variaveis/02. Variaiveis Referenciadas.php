<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <?php
    $a = 3;
    $b = &$a; //variavel referenciada altera tanto A quanto B. (&)
    $b += 5;

    echo $a;
    echo "<br>";
    echo $b;


    ?>
</body>
</html>