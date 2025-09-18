<?php
class Animal {
    public function falar() {
        echo "Som genérico";
    }
}

class Cachorro extends Animal {
    public function falar() {
        echo "Au Au";
    }
}

class Gato extends Animal {
    public function falar() {
        echo "Miau";
    }
}

$dog = new Cachorro();
$cat = new Gato();

$dog->falar();
echo "<br>";
$cat->falar();
?>
