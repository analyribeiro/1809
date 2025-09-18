<?php
class Funcionario {
    public $nome;
    public $salario;
    public function __construct($nome, $salario) {
        $this->nome = $nome;
        $this->salario = $salario;
    }
}

class Gerente extends Funcionario {
    public function calcularBonus() { return $this->salario * 0.2; }
}

class Estagiario extends Funcionario {
    public function calcularBonus() { return $this->salario * 0.05; }
}

$g = new Gerente("Lucas", 5000);
$e = new Estagiario("Ana", 1500);

echo "Gerente bônus: R$ " . $g->calcularBonus() . "<br>";
echo "Estagiário bônus: R$ " . $e->calcularBonus();
?>
