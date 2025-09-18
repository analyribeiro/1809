<?php
class Livro {
    public $titulo;
    public $autor;

    public function __construct($titulo, $autor) {
        $this->titulo = $titulo;
        $this->autor = $autor;
    }
}

class Biblioteca {
    private $livros = [];

    public function adicionarLivro(Livro $l) {
        $this->livros[] = $l;
    }

    public function listarLivros() {
        foreach ($this->livros as $l) {
            echo "{$l->titulo} - {$l->autor}<br>";
        }
    }
}

$b = new Biblioteca();
$b->adicionarLivro(new Livro("Dom Casmurro", "Machado de Assis"));
$b->adicionarLivro(new Livro("O Hobbit", "J.R.R. Tolkien"));
$b->listarLivros();
?>
