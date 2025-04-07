<?php

class Livro {
    public $titulo;
    public $autor;
    public $ano;

// Construct
public function __construct($titulo, $autor, $ano) {
    $this->titulo = $titulo;
    $this->autor = $autor;
    $this->ano = $ano;

}

public function exibirInformacoes() {
    echo "Livro: $this->titulo\n";
    echo "Autor: $this->autor\n";
    echo "Ano: $this->ano\n";

}
}

// Criando produtos usando o construtor

$livro1 = new Livro("1984", "George Orwell", 1949);
$livro2 = new Livro("O Hobbit", "J.R.R. Tolkien", 1937);

$livro1->exibirInformacoes();
$livro2->exibirInformacoes();


    


















