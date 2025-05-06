<?php
require_once "todolist.php";
require_once "usuarios.php";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $titulo = $_POST["titulo"];
    $descricao = $_POST["descricao"];
    $data_entrega = $_POST["data_entrega"];

    $tarefa1 = new Tarefas($titulo, $descricao, $data_entrega);

    $usuario = new Usuario("adada", "ajdhakjws", "sdjfhasj");

    $usuario->adicionarTarefas($tarefa1);
    $tarefa1->estaAtrasada();
    $usuario->listarTarefas();
    $usuario->concluirTarefa("Fazer o Teste");
    echo "<hr>";


}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>oi</h1>
</body>
</html>
