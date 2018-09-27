<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
    switch ($op){
        case 1:
            echo "teste 01";
            break; // se faz necessario colocar um break para impedir que o php execute os casos seguintes
        case 2:
            echo "teste 02";
            break;
        default: // case padrao, caso nenhum dos anteriores atender
            echo "padrao";
    }
?>
</body>
</html>