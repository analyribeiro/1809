<?php
class Aluno {
    private $nome;
    private $nota;

    public function setNome($nome) { $this->nome = $nome; }
    public function getNome() { return $this->nome; }

    public function setNota($nota) { $this->nota = $nota; }
    public function getNota() { return $this->nota; }
}

$a1 = new Aluno();
$a1->setNome("Maria");
$a1->setNota(9);

echo "Aluno: " . $a1->getNome() . " - Nota: " . $a1->getNota();
?>
