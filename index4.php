<?php
class Produto {
    public $preco;

    public function aplicarDesconto($percentual) {
        $this->preco -= $this->preco * ($percentual / 100);
    }
}

$p = new Produto();
$p->preco = 100;
$p->aplicarDesconto(10);

echo "Preço com desconto: R$ " . $p->preco;
?>
