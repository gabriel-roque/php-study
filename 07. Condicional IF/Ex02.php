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
    //menor de 18
    if($idade < 16){
        echo "Nao e permitido votar.";
    //entre 16 e 18 ou maior que 65 anos
    }elseif (($idade >= 16 and $idade < 18) or ($idade > 65)){
        echo "O voce e opcional.";
    //maior de 18
    }else{
        echo "Voto e obrigatorio";
    }
?>
</body>
</html>