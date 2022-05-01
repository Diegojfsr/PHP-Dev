<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valores</title>
</head>
<body>
<?php
     $txt1numero = $GET["txt1numero"];
     $txt2numero = $GET["txt2numero"];

     if ($txt1numero % 2 == 0) {
       echo "<script> O 1° Número é par. <script>"; 
     }else{
            echo "<script> O 2° Número é ímpar. <script>"; 
          }

    ?>
    