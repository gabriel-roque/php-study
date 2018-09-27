<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <?php
    $n1 = $_GET["a"];
    $n2 = $_GET["b"];
    $m = ($n1+$n2)/2;

    echo "A media vale: $m <br>";

    $r = ($m >= 6 and $m <= 7 ) ? "APROVADO" : "REPROVADO";

    echo "Situacao do aluno: $r";


//    a=8&b=6

    ?>
</body>
</html>