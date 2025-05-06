<?php


require_once 'sistema.php';
require_once 'todolist.php';

if (!isset($_POST["email"]) || !isset($_POST["senha"]) || !isset($_POST["name"])) {
    null;


}
else {

    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $name = $_POST["name"];
    $sistema = new Sistema();
    $sistema->registrarUsuario($name, $email, $senha);
    $usuario = $sistema->login($email, $senha);


    $tarefa1 = new Tarefas("Fazer o Teste", "Revisar PHP", '10/05/2025');
    $tarefa2 = new Tarefas("Ir na empresa", "Participar da reunião", "06/05/2025");
    $usuario->adicionarTarefas($tarefa2);
    $tarefa2->estaAtrasada();
    $usuario->adicionarTarefas($tarefa1);
    $usuario->listarTarefas();
    $usuario->concluirTarefa("Fazer o Teste");
    echo "<hr>";



}









$sistema2 = new Sistema();

$sistema2->registrarUsuario("Pedro", "Pedrosouza@gmial.com", "892256");
$usuario2 = $sistema2->login("Pedrosouza@gmial.com", "892256");



if ($usuario2) {
    $tarefa1 = new Tarefas("Fazer compras" ,"Comprar batata", "09/03/2025");
    $usuario2->adicionarTarefas($tarefa1);
    $usuario2->listarTarefas();
    $tarefa1->estaAtrasada();
    $usuario2->concluirTarefa("Fazer compras");
    
    

}

echo "<hr>";



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Login</h1>
<form method="POST">
    <input type="text" name="name">
    <input type="email" name="email">
    <input type="password" name="senha">
    <input type="submit" name="enviar">
</form>




    
</body>
</html>