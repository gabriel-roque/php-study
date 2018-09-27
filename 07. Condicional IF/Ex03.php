<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php
    $nota1 = $_GET["nota1"];
    $nota2 = $_GET["nota2"];
    $media = ($nota1+$nota2)/2;
    ?>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" type="text/css" href="ex03.css">
</head>
<body class="corpo">
    <?php
    if ($media >= 7){
        echo "A media entre <span class='aprovado'>$nota1</span> e <span class='aprovado'>$nota2</span> 
              e igual a <span class='aprovado'>$media</span><br>";
        echo "Situacao do aluno: <span class='aprovado'>APROVADO</span>";
    }elseif ($media < 7){
        echo "A media entre <span class='reprovado'>$nota1</span> e <span class='reprovado'>$nota2</span> 
              e igual a <span class='reprovado'>$media</span><br>";
        echo "Situacao do aluno: <span class='reprovado'>REPROVADO</span>";
    }
    ?>
    <br><button class="back"><a href="Ex03.html"><label class="back">BACK</label></a></button>
</body>
</html>