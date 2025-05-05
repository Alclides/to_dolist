<?php


require_once 'sistema.php';

$sistema = new Sistema();

$sistema->registrarUsuario("Alclides", "Alclidessantosblabla@gmail.com", "12022003");


$usuario = $sistema->login("Alclidessantosblabla@gmail.com", "12022003");

if ($usuario) {
    $tarefa1 = new Tarefas("Fazer o Teste", "Revisar PHP", '10/05/2025');
    $usuario->adicionarTarefas($tarefa1);
    $usuario->listarTarefas();
    $usuario->concluirTarefa("Fazer o Teste");
    echo "<hr>";


}


