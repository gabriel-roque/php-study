<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php
    $num = $_GET["num"];
    ?>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
    switch ($num){
        case 2:
        case 3:
        case 4:
        case 5:
        case 6:
            echo "Precisa ir a escola";
            break;
        case 7:
        case 1:
            echo "Nao precisa ir a escola";
            break;
        default:
            echo "Dia da semana invalido";
    }
?>
</body>
</html>