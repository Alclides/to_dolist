<?php


require_once 'sistema.php';
require_once 'todolist.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $name = $_POST["name"];
    $sistema = new Sistema();
    $sistema->registrarUsuario($name, $email, $senha);
    $sistema->salvarRegistro();
    
    header("Location: login.php");
    exit;


}








?>
