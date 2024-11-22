<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Conta\Conta;

$endereco = new Endereco('Guarulhos', 'Pimentas', 'Rua Sete', '9');
$titular = new Titular(new Cpf('123.456.789-10'), 'Leonardo', $endereco);
$primeiraConta = new Conta($titular, 1);
$primeiraConta->depositar(500);
$primeiraConta->sacar(300);

echo $primeiraConta->recuperarSaldo() . PHP_EOL;

var_dump($primeiraConta);

echo Conta::recuperarNumeroDeContas();