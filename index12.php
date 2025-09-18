<?php
class Veiculo {
    public $velocidadeMaxima;
}

class Carro extends Veiculo {}
class Moto extends Veiculo {}

$c = new Carro();
$c->velocidadeMaxima = 180;

$m = new Moto();
$m->velocidadeMaxima = 120;

echo "Carro: {$c->velocidadeMaxima} km/h<br>";
echo "Moto: {$m->velocidadeMaxima} km/h";
?>
