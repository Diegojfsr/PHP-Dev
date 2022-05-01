<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>conversão</title>
</head>
<body>
    <?php
        $tempF = $_GET["txtTemp"];
        //Fórmula de conversão
        $tempC = ($tempF-32)/1.8;
        //Exibindo o resultado
        echo "<h1>A temperatura em ºC é $tempC</h1>";    
    ?>
</body>
</html>