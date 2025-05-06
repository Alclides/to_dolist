<?php 
require_once 'sistema.php';
require_once 'todolist.php';


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <form method="POST" action="processa_login.php" >
        <input type="email" name="loginemail">
        <input type="password" name="loginsenha">
        <input type="submit" name="enviar">
    </form>
</body>
</html>