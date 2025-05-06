<?php 
require_once "sistema.php";

if ($_SERVER["REQUEST_METHOD"] == "POST" ) {
    $emailogin = $_POST["loginemail"];
    $senhalogin = $_POST["loginsenha"];
    $sistema = new Sistema();
    $usuario = $sistema->login($emailogin, $senhalogin);
    header("Location: tarefas.php");
    exit;
}


?>