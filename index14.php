<?php
class Forma {
    public function calcularArea() { return 0; }
}

class Quadrado extends Forma {
    public $lado;
    public function calcularArea() { return $this->lado * $this->lado; }
}

class Circulo extends Forma {
    public $raio;
    public function calcularArea() { return pi() * ($this->raio ** 2); }
}

$q = new Quadrado();
$q->lado = 4;

$c = new Circulo();
$c->raio = 3;

echo "Área quadrado: " . $q->calcularArea() . "<br>";
echo "Área círculo: " . $c->calcularArea();
?>
