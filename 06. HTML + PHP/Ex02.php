<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <?php
    $nome = $_GET["nome"];
    $nasc = $_GET["nasc"];
    $sexo = $_GET["sexo"];
    $idadeAtual = (date("Y")-$nasc); //Funcao date para pegar o ano atual

    echo "A $nome e do sexo $sexo e possui $idadeAtual anos de idade.";
    ?>

<a href="Ex02.html">BACK</a>
</body>
</html>