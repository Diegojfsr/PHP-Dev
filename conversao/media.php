<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Média dos 3 alunos (PHP)</title>
</head>
<body>
    <?php
        $nota1 = $_GET["nota1"];
        $nota2 = $_GET["nota2"];
        $nota3 = $_GET["nota3"];
        $media = ($nota1+$nota2+$nota3)/3;
        echo "A média final é de $media";
    ?>
</body>
</html>