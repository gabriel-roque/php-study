<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>


    <?php
        $valor = $_GET["valor"]; //recebe o valor inserido pelo formulario

        $raiz = sqrt($valor);

        echo "A raiz quadrada e: ".number_format($raiz, 2);
    ?>

<a href="Ex01.html">Voltar</a>
<!--link para voltar-->

</body>
</html>