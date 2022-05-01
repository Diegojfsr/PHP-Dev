<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Piramide</title>
</head>
<body>
    
    <form method="post">
        <label>Altura</label>
        
        <input type="number" name="txtAltura">
        <br>
        <input type="submit" name="btGerar" value="Gerar">
    </form>


    <div>
        <?php
            if(isset($_POST["btGerar"])){
                $altura = $_POST["txtAltura"];

            
               
                for($i=0; $i<$altura; $i++){
                    for($j=0; $j<=$i; $j++){
                        echo "*";
                    }
                    echo "<br>";
                }
            
        }
            
        ?>
    </div>
</body>
</html>