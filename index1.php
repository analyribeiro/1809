<?php
class Pessoa {
    public $nome;
    public $idade;
}

$p1 = new Pessoa();
$p1->nome = "João";
$p1->idade = 20;

echo "Nome: {$p1->nome}, Idade: {$p1->idade}";
?>
