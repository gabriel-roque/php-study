<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <?php
        function soma(&$n1){ // passagem por parametro de referencia altera o valora da variavel original
            $n1 += 2;
        }

        $a = 3;
        soma($a);
        echo $a;

    ?>
</body>
</html>