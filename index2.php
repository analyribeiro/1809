<?php
class Carro {
    public $marca;
    public $modelo;
    public $ano;

    public function exibirInfo() {
        echo "Carro: $this->marca - $this->modelo - $this->ano";
    }
}

$c1 = new Carro();
$c1->marca = "Toyota";
$c1->modelo = "Corolla";
$c1->ano = 2020;
$c1->exibirInfo();
?>
