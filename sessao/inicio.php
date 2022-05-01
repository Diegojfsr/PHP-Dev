<?php
    session_start();
        if(! isset($_SESSION["logado"])){
        header("location:index.php");
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Inicio da Sessao </title>
</head>

<body>
    <h2>Voce esta logado como:</h2>
    <h1>
        <?php
        echo $_SESSION["usuario"];
        ?>
        
    </h1>

    <h2><a href=logout.php> Sair </a></h2>
    

</body>
</html>