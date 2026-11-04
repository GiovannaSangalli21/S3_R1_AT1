<?php


// Criando a classe Produto (o molde)
class Produto {
    // Atributos (características)
    public $nome;
    public $preco;


    // Método (ação)
    public function mostrarProduto() {
        echo "Produto: " . $this->nome . " | Preço: R$ " . number_format($this->preco, 2, ',', '.') . "<br>";
    }
}


// Instanciando o primeiro objeto
$produto1 = new Produto();
$produto1->nome = "Teclado Mecânico";
$produto1->preco = 250.00;


// Instanciando o segundo objeto
$produto2 = new Produto();
$produto2->nome = "Mouse Gamer";
$produto2->preco = 120.50;


// Chamando o método para cada objeto
$produto1->mostrarProduto();
$produto2->mostrarProduto();


?>