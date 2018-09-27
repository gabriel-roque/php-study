<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <?php
     $a = $_GET["a"];
     $b = $_GET["b"];
     $op = $_GET["op"];

     echo "Os valores recebidos sao: $a e $b <br>";
     $r = ($op == "s") ? $a + $b : $a * $b;

     echo "O resultado sera: $r";

// Inserir dados pela URL
// a=5&b=6&op=n
    ?>
</body>
</html>