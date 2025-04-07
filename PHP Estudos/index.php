<?php
 
 // Criando um modelo de produto

class Produto {
    public $nome;

    public function mostrarNome(){
        echo "O nome do produto é: $this->nome";

    }
}

// Criando um novo produto (objeto)

$meuProduto = new Produto();
$meuProduto->nome = "Camisa";

//Chamando a função que mostra o nome

$meuProduto->mostrarNome();



// class	Um molde de algo (ex: Produto, Pessoa, etc.)
// public	Visível de fora, pode acessar e mudar
// $this->	Refere-se ao próprio objeto
// new	Cria um objeto a partir da classe





