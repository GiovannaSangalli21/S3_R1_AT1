<?php


namespace App\Model;


class ClienteNacional extends Cliente {
    private float $valorServico;


    public function __construct(string $nome, float $valorServico) {
        parent::__construct($nome);
        $this->valorServico = $valorServico;
    }


    public function calcularFatura(): float {
        return $this->valorServico;
    }
}