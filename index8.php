<?php
class Usuario {
    private $senha;

    public function __construct($senha) {
        $this->senha = $senha;
    }

    public function validarSenha($senhaDigitada) {
        return $this->senha === $senhaDigitada;
    }
}

$u = new Usuario("1234");

echo $u->validarSenha("1234") ? "Senha correta" : "Senha incorreta";
?>
