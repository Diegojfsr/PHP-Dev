<?php

    function exibir($dados){
        foreach($dados as $item){
            echo "<tr><td>{$item["tarefa"]}</td><td>".date('d/m/y', strtotime($item["data"]))."</td></tr>";
            fdata($item["data"]). "</td></tr>";
            }

    }

    function fdata($data){
        $data = strtotime($data);
        return date ('d/m/y', $data);
    }

    function verificatarefas(){
        if(isset($_SESSION["tarefas"])){
            $tarefas = $_SESSION["tarefas"];
        }else{
            $tarefas = array();
        }
        return $tarefas;
    }

?>