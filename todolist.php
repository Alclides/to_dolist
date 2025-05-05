<?php

class Tarefas {
    public $titulo;
    public $descricao;
    public $data_entrega;
    public $status;

    public function __construct(string $titulo, string $descricao, string $data_entrega) {
        $this->titulo = $titulo;
        $this->descricao = $descricao;
        $this->data_entrega = DateTime::createFromFormat('d/m/Y', $data_entrega);
        

    }

    public function marcarConcluida() {
        $this->status = "Concluída!";
    }

    public function estaAtrasada() {
        $hoje = new DateTime();
        return $hoje > $this->data_entrega && $this->descricao != "Concluída!";
    
    }

    public function __toString() {
        return "{$this->titulo} - {$this->descricao} - Entrega: " . $this->data_entrega->format('d/m/y');
    }
}


