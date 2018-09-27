<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <?php
        $preco = $_GET["p"];

        echo "O preco do produto e R$ ". number_format($preco,2); //number_format: formatacao de numeros
        $preco += (0.10*$preco);
        echo "<br>";
        echo "Com o aumento de 10% R$ ". number_format($preco,2);

    ?>
</body>
</html>