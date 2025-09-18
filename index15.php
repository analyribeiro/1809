<?php
class Ingresso {
    public $preco;
    public function __construct($preco) {
        $this->preco = $preco;
    }
}

class IngressoVIP extends Ingresso {
    public function exibirPreco() { echo "Ingresso VIP: R$ " . ($this->preco + 50); }
}

class IngressoNormal extends Ingresso {
    public function exibirPreco() { echo "Ingresso Normal: R$ " . $this->preco; }
}

$v = new IngressoVIP(100);
$n = new IngressoNormal(100);

$v->exibirPreco();
echo "<br>";
$n->exibirPreco();
?>
