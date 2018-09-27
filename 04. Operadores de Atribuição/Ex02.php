<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <?php
        $ano = $_GET["ano"];

        echo "O ano atual $ano e o anterior era: ".--$ano; //pre-decremento ou pre-incremento


    ?>
</body>
</html>