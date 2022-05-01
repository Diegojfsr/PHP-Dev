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
        <label>Produto</label>
        <input type="txt" name="txtProduto">

        <label>Quantidade</label>
        <input type="int" name="intQtd">

        <label>Valor</label>
        <input type="int" name="intValor">


        <input type="submit" name="btCadastrar" value="Cadastrar">
    </form>

    <?php

        $produtos = verificaProdutos();   //$tarefas = verificatarefas();

       // if(isset($_SESSION["tarefas"])){
         //   $tarefas = $_SESSION["tarefas"];
        //}else{
          //  $tarefas = array();
        //}

        if(isset($_POST["btCadastrar"])){
            $Produto=$_POST["txtProduto"];    //$data=$_POST["txtData"];
            $Quantidade=$_POST["intQtd"];    //$tarefa=$_POST["txtTarefa"];
            $Valor=$_POST["intValor"];
            $Somar=($_POST["intQtd"] * $_POST["intValor"]);


            $produtos[]=array("Produto"=>$Produto, "Quantidade"=>$Quantidade, "Valor"=>$Valor, "Somar"=>$Somar);     //$tarefas[]=array("tarefa"=>$tarefa, "data"=>$data);

            //$tarefas[]=$tarefa;
            //var_dump($tarefas);
            //foreach($tarefas as $item){
            //    echo $item."<br>";
            //}

            $_SESSION["produtos"]=$produtos;
        }
    ?> 

    <table>
        <tr>
            <td>Produto</>
            <td>Quantidade</td>
            <td>Valor</td>
        </tr>
        <?php
            exibir($produtos);

           // foreach($tarefas as $item){
            //echo "<tr><td>{$item["tarefa"]}</td><td>".date('d/m/y', strtotime($item["data"]))."</td></tr>";
            //}
        ?>
    </table>



</body>
</html>