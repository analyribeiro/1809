<?php
class Livro {
    private $titulo;
    private $autor;

    public function __construct($titulo, $autor) {
        $this->titulo = $titulo;
        $this->autor = $autor;
    }

    public function exibir() {
        echo "Livro: {$this->titulo} - Autor: {$this->autor}";
    }
}

$l = new Livro("1984", "George Orwell");
$l->exibir();
?>
