<?php


namespace App\Model;


class FuncionarioCLT extends Funcionario {
    private float $salarioBase;
    private float $descontos;


    public function __construct(string $nome, string $documento, float $salarioBase, float $descontos) {
        parent::__construct($nome, $documento);
        $this->salarioBase = $salarioBase;
        $this->descontos = $descontos;
    }


    // Sobrescrita do método calcularPagamento
    public function calcularPagamento(): float {
        return $this->salarioBase - $this->descontos;
    }
}