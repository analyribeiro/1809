<?php
class Produto {
    public $nome;
    public $preco;

    public function __construct($nome, $preco) {
        $this->nome = $nome;
        $this->preco = $preco;
    }
}

class Loja {
    private $produtos = [];

    public function adicionarProduto(Produto $p) {
        $this->produtos[] = $p;
    }

    public function listarProdutos() {
        foreach ($this->produtos as $p) {
            echo "{$p->nome} - R$ {$p->preco}<br>";
        }
    }
}

$l = new Loja();
$l->adicionarProduto(new Produto("Camisa", 50));
$l->adicionarProduto(new Produto("Calça", 100));
$l->listarProdutos();
?>
