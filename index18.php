<?php
class Animal {
    public function falar() { echo "Som"; }
}

class Cachorro extends Animal {
    public function falar() { echo "Au Au"; }
}

class Gato extends Animal {
    public function falar() { echo "Miau"; }
}

$animais = [new Cachorro(), new Gato()];

foreach ($animais as $animal) {
    $animal->falar();
    echo "<br>";
}
?>
