<?php

namespace Alura\Banco\Modelo;

final class Cpf
{
    private string $numero;

    public function __construct(string $numero)
    {
        $this->numero = $numero;
    }

    public function recuperaNumero()
    {
        return $this->numero;
    }
}