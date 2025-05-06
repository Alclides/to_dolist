<?php

require_once 'todolist.php';

class Usuario {
    public $nome;
    public $email;
    public $senha;
    private $tarefas = [];

    public function __construct(string $nome, string $email, string $senha) {
        $this->nome = $nome;
        $this->email = $email;
        $this->senha = $senha;

    }

    public function listarTarefas() {
        foreach ($this->tarefas as $tarefa) {
            echo $tarefa. "<br>";
        }
    }

    public function adicionarTarefas($tarefa) {
        $this->tarefas[] = $tarefa;
    }

    public function concluirTarefa($titulo) {
        foreach ($this->tarefas as $tarefa) {
            if ($tarefa->titulo === $titulo ) {
                $tarefa->marcarConcluida();
                echo "Tarefa '{$titulo}' marcada com concluída!". "<br>";
                return; 
            }
        }
        echo "Tarefa não encontrada!";
    }

    public function verificarSenha($senhaDigitada) {
        return $this->senha === $senhaDigitada;
    }


}
