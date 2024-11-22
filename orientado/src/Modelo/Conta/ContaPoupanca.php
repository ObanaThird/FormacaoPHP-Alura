<?php

namespace Alura\Banco\Modelo\Conta;

use Alura\Banco\Modelo\Conta\Conta;

class ContaPoupanca extends Conta
{
    public function sacar(float $valorASacar): void
    {
        $tarifaSaque = $valorASacar * $this->percentualTarifa();
        $valorSaque = $valorASacar + $tarifaSaque;
        if ($valorSaque> $this->saldo) {
            echo "Saldo indisponível";
            return;
        }
        $this->saldo -= $valorSaque;
    }
    protected function percentualTarifa(): float
{
    return 0.05;
}
}