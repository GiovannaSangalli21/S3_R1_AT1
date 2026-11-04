<?php


namespace App\Model;


class ClienteInternacional extends Cliente {
    private float $valorUSD;
    private float $taxaCambio;


    public function __construct(string $nome, float $valorUSD, float $taxaCambio) {
        parent::__construct($nome);
        $this->valorUSD = $valorUSD;
        $this->taxaCambio = $taxaCambio;
    }


    public function calcularFatura(): float {
        return $this->valorUSD * $this->taxaCambio;
    }
}