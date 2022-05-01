<?php
session_start();
include "util.inc";
include "cabecalho.html"
?>
<!--
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

    <title>Document</title>
</head>
<body>-->
    <form method="post">
        <label>Data</label>
        <input type="date" name="txtData">
        <label>Tarefa</label>
        <input type="text" name="txtTarefa">
        <input type="submit" name="btCadastrar" value="Cadastrar">
    </form>

    <?php

        $tarefas = verificatarefas();

       // if(isset($_SESSION["tarefas"])){
         //   $tarefas = $_SESSION["tarefas"];
        //}else{
          //  $tarefas = array();
        //}



        if(isset($_POST["btCadastrar"])){
            $data=$_POST["txtData"];
            $tarefa=$_POST["txtTarefa"];



            $tarefas[]=array("tarefa"=>$tarefa, "data"=>$data);

            //$tarefas[]=$tarefa;
            //var_dump($tarefas);
            //foreach($tarefas as $item){
            //    echo $item."<br>";
            //}

            $_SESSION["tarefas"]=$tarefas;
            
        }
    ?>

    <table>
        <tr>
            <td>Tarefa</>
            <td>Data</td>
        </tr>
        <?php
            exibir($tarefas);

           // foreach($tarefas as $item){
            //echo "<tr><td>{$item["tarefa"]}</td><td>".date('d/m/y', strtotime($item["data"]))."</td></tr>";
            //}
        ?>
    </table>



</body>
</html>