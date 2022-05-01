<?php
    session_start();
    unset($_SESSION["logado"]);
    unset($_SESSION["usuario"]);
    session_destroy();
    header('location:index.php');
?>