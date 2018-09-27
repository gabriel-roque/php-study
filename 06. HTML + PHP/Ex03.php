<!DOCTYPE html>
<html lang="pt-br">
<head>
<!--RECEBO TODOS OS PARAMETROS-->
    <?php
    $nome = $_GET["nome"];
    $tamanho = $_GET["tamanho"];
    $cor = $_GET["cor"];
    ?>
    <meta charset="UTF-8">
    <title>Title</title>
</head>

<style>
/*Aplico ao CSS local os parametros recebidos*/
/*Qualquer snap que receber a classe TEXTO assume essas caracteristicas*/
    span.texto{
        font-size: <?php echo $tamanho; ?>;
        color: <?php echo $cor; ?>;
    }
</style>

<body>
<!--Neste ponto estou escrevendo o texto insirido aplicando as os parametros
recebidos pelo PHP e anteriormente ao CSS local-->
    <?php
        echo "<span class='texto'>$nome</span>";
    ?>
</body>
</html>