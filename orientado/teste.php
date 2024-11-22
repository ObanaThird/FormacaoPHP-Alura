<?php

use Alura\Banco\Modelo\Conta\{Conta,Titular};
use Alura\Banco\Modelo\{Cpf, Endereco};

require_once 'autoload.php';

$conta = new Conta(
    new Titular(
        new Cpf('123.456.789-10'), 'Leonardo', 
        new Endereco('Guarulhos', 'Pimnetas', 'Rua Nove', '7')
    ),
    1
);

$conta->depositar(500);
$conta->sacar(100);

echo $conta->recuperarSaldo();