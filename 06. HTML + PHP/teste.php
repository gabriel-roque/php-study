<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <?php
    $texto = $_GET["texto"];
    $tamanho = $_GET["tamanho"];
    $cor = $_GET["cor"];
    ?>
</head>
<style>
    span.texto{
        font-size: <?php echo $tamanho; ?>;
        color: <?php echo $cor; ?>;
    }
</style>
<body>
    <?php
    echo "<span class='texto'>$texto</span>"
    ?>
</body>
</html>