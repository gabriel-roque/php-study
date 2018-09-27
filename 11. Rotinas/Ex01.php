<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php
    $n1 = isset($_POST["n1"])?$_POST["n1"]:0;
    $n2 = isset($_POST["n2"])?$_POST["n2"]:0;

    ?>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php

    function soma($n1, $n2){
        $r = $n1 + $n2;
        return $r;
    }

    echo soma($n1, $n2); //estou pedindo para escrever o resultado retornado


?>
</body>
</html>