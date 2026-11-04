<?php


namespace App\Service;


use App\Model\Funcionario;


class FolhaPagamentoService {
    // Uso do Polimorfismo: aceita qualquer tipo de objeto derivado de Funcionario
    public function processarPagamento(Funcionario $funcionario): void {
        echo "Processando pagamento de: " . $funcionario->getNome() . PHP_EOL;
        echo "Valor a pagar: R$ " . number_format($funcionario->calcularPagamento(), 2, ',', '.') . PHP_EOL;
        echo "----------------------------------------" . PHP_EOL;
    }
}