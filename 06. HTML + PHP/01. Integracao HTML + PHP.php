<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <div>
        <form method="get" action="01.%20Integracao%20HTML%20+%20PHP.php">
            <input type="text" placeholder="Valor" name="valor"/>
            <input type="submit" value="Calcular"/>
        </form>
    </div>

    <?php
    $valor = $_GET["valor"]; //aqui ele recebe pelo metodo GET o valor que vou inserido no formulario
    echo "Digitou $valor";
    ?>

</body>
</html>