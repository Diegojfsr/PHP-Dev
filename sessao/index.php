<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="style.css">

    <title>Sessão</title>

</head>
<body>
    <form method="post">
        <label>Usuário: </label>
        <input type="text" name="txtUsuario">
        <label>Senha: </label>
        <input type="password" name="txtSenha">
        <input type="submit" name="btLogin" value="Login" >
    </form>

    <?php
        if (isset($_POST["btLogin"])){
            $usuario = $_POST["txtUsuario"];
            $senha = $_POST["txtSenha"];

            if($usuario=="admin" && $senha=="1234"){
                header("location:inicio.php");
                $_SESSION["logado"]=true;
                $_SESSION["usuario"]="admin";
            }else{
                echo "<script>
            alert('Usuário e/ou senha incorreto(s)');
                    </script>";
            }
        }
    ?>
</body>
</html>