<?php


namespace App\Model;


abstract class Funcionario {
    protected string $nome;
    protected string $documento;


    public function __construct(string $nome, string$documento) {
        $this->nome =$nome;
        $this->documento =$documento;
    }


    public function getNome(): string {
        return $this->nome;
    }


    public function getDocumento(): string {
        return $this->documento;
    }


    // Método abstrato: obriga as classes filhas a implementarem
    abstract public function calcularPagamento(): float;
}