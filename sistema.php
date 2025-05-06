<?php

require_once 'usuarios.php';

class Sistema {
    public $usuarios = [];

    

    public function registrarUsuario(string $nome, string $email, string $senha) {
        $usuario = new Usuario($nome, $email, $senha,);
        $this->usuarios[] = $usuario;
        echo "Úsuario {$nome} resgistrado no Sistema.<br>";
        

    }

    public function salvarRegistro() {
        $arquivo = fopen("usuarios.txt", "a");
        if ($arquivo) {
            foreach ($this->usuarios as $usuario) {
                $linha = "{$usuario->nome};{$usuario->email};{$usuario->senha}\n";
                fwrite($arquivo, $linha);
            }
            fclose($arquivo);
        } else {
            echo "Erro ao abrir o arquivo.";
        }
    }

    

    public function login($emailogin, string $senhalogin) {
        $arquivo = fopen(__DIR__,"usuarios.txt", "r");
        if ($arquivo) {
            while (($linha = fgets($arquivo)) !== false) {
                list($nome, $email, $senha) = explode(";", trim($linha));
                if ($email == $emailogin && $senha == $senhalogin) {
                    fclose($arquivo);
                    echo "Login realizado com sucesso!<br>";
                    
        }
            }
        } echo "Login falhou.<br>";
        return null;
    }


}