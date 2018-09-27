<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php
    //Tratar caso user insira campo vazio.
    $nasc = isset($_GET["nasc"])?$_GET["nasc"]:1900;
    $idade = (date("Y") - $nasc);
    ?>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
    if($idade >= 18){
        echo "Esta apto a dirigir e votar </br>";
        echo "Sua idade: ".$idade;
    }else{
        echo "Nao esta apto a votar e nem dirigir </br>";
        echo "Sua idade: ".$idade;
    }
?>
</body>
</html>