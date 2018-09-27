<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php
    $numero = $_GET["numero"];
    $op = $_GET["op"];
    ?>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
    switch ($op){
        case "dobro":
            echo $numero*2;
            break;
        case "cubo":
            echo pow($numero,3);
            break;
        case "raizQuadrada":
            echo number_format(sqrt($numero),2);
            break;
        default:
            echo "Nenhuma Operacao Marcada.";
    }
?>
<br><a href="Ex01.html">Voltar</a>

</body>
</html>