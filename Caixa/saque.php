<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Caixa Eletronico </title>
</head>
<body>

    <?php

        $valor = $_POST["txtValor"];


        while($valor>=200){
            echo " 1 cedula de R$200 </br></br>";  
            $valor -= 200;  //$valor = $valor -200
        }
        while($valor>=100){
            echo "1 cedula de R$100,00 </br></br>";   
            $valor -= 100;
        }
        while($valor>=50){
            echo "1 cedula de R$50,00 </br></br>"; 
            $valor -= 50;
        }

        while($valor>=20){
            echo "1 cedula de R$20,00 </br></br>"; 
            $valor -= 20;
        }

        while($valor>=10){
            echo "1 cedula de R$10,00 </br></br>"; 
            $valor -= 10;
        }

        while(($valor>=5)&&($valor!=6)&&($valor!=8)){
            echo "1 cedula de R$5,00 </br></br>";  
            $valor -= 5;
        }
        
        while($valor>=2){
            echo "1 cedula de R$2,00 </br></br>";  
            $valor -= 2;
        }

        if($valor>0){
            echo "Sobrou R$ $valor, essa quantia sera desenvolvida para sua conta";
        }
    ?>

</body>
</html>