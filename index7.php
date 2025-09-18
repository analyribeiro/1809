<?php
class Funcionario {
    private $nome;
    private $salario;

    public function __construct($nome, $salario) {
        $this->nome = $nome;
        $this->salario = $salario;
    }

    public function aumentarSalario($percentual) {
        $this->salario += $this->salario * ($percentual / 100);
    }

    public function exibir() {
        echo "{$this->nome} - Salário: R$ {$this->salario}";
    }
}

$f = new Funcionario("Carlos", 2000);
$f->aumentarSalario(10);
$f->exibir();
?>
