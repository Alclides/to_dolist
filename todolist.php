<?php

class Tarefas {
    public $titulo;
    public $descricao;
    public $data_entrega;
    public $status;

    public function __construct(string $titulo, string $descricao, string $data_entrega) {
        $this->titulo = $titulo;
        $this->descricao = $descricao;
        $this->data_entrega = DateTime::createFromFormat('Y-m-d', $data_entrega);
        

    }

    public function marcarConcluida() {
        $this->status = "Concluída!";
    }

    public function estaAtrasada() {
        if (!isset($this->data_entrega)) {
            echo 23;
        }

        $hoje = new DateTime();
        $hoje_format = $hoje->format('d/m/Y');
        if ($hoje_format >= $this->data_entrega->format('d/m/y')) {
            echo "Atrasado <br>";

        }else {
            echo "Em dia! <br>";
        }
    
    }

    public function __toString() {
        return "{$this->titulo} - {$this->descricao} - Entrega: " . $this->data_entrega->format('d/m/Y');
    }

    public function salvarTarefaemArquivo() {
        $arquivo = fopen("tarefas.txt", "a");
        if ($arquivo) {
            $linha = "{$this->titulo};{$this->descricao};{$this->data_entrega->format('d/m/Y')}\n";
            fwrite($arquivo, $linha);
            fclose($arquivo);
        } else {
            echo "Erro ao abrir o arquivo.";
        }
    }
}


