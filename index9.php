<?php
class Calculadora {
    public function somar($a, $b) { return $a + $b; }
    public function subtrair($a, $b) { return $a - $b; }
    public function multiplicar($a, $b) { return $a * $b; }
    public function dividir($a, $b) { return $b != 0 ? $a / $b : "Divisão por zero!"; }
}

$calc = new Calculadora();
echo $calc->somar(10, 5);
?>
