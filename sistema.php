<?php

require_once 'usuarios.php';

class Sistema {
    public $usuarios = [];

    public function registrarUsuario(string $nome, string $email, string $senha) {
        $usuario = new Usuario($nome, $email, $senha,);
        $this->usuarios[] = $usuario;
        echo "Úsuario {$nome} resgistrado no Sistema.<br>";

    }

    public function login($email, string $senha) {
        foreach ($this->usuarios as $usuario) {
            if ($usuario->email === $email && $usuario->verificarSenha($senha)) {
                echo "Bem-vindo {$usuario->nome}!<br>";
                return $usuario;
            }
        } echo "Login falhou.<br>";
        return null;
    }


}