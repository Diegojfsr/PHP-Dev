<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Idade (PHP)</title>
</head>

<body>
    <?php
        $anos=$_GET["anos"];
        $meses=$_GET["meses"];
        $dias=$_GET["dias"];
        $anosEmDias=$anos*365;
        $mesesEmDias=$meses*30;
        $idadeEmDias=$anosEmDias+$mesesEmDias+$dias;
        echo "Sua idade em dias é $idadeEmDias";
    ?>
</body>
</html>