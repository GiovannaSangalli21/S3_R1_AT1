<?php


namespace App\Model;


class FuncionarioPJ extends Funcionario {
    private float $horasTrabalhadas;
    private float $valorHora;


    public function __construct(string $nome, string $documento, float $horasTrabalhadas, float $valorHora) {
        parent::__construct($nome, $documento);
        $this->horasTrabalhadas = $horasTrabalhadas;
        $this->valorHora = $valorHora;
    }


    // Sobrescrita do método calcularPagamento
    public function calcularPagamento(): float {
        return $this->horasTrabalhadas * $this->valorHora;
    }
}