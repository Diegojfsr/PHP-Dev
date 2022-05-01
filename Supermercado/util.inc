<?php

    function exibir($dados){
        foreach($dados as $item){
            echo"<tr><td>{$item["Produto"]}</td><tr>";
            echo"<tr><td>{$item["Quantidade"]}</td><tr>";
            echo"<tr><td>{$item["Valor"]}</td><tr>";
            echo"<tr><td>{$item["Somar"]}</td><tr>";
        }

    }


    function verificaProdutos(){
        if(isset($_SESSION["produtos"])){
            $produtos = $_SESSION["produtos"];
        }else{
            $produtos = array();
        }
        return $produtos;
    }

?>