<?php

use Alura\Banco\Modelo\Funcionario\Funcionario;

class EditorVideo extends Funcionario
{
    public function calculaBonificacao(): float
    {
        return 600.0;    
    }
}