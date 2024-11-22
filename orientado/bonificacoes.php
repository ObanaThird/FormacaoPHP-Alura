<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Modelo\Funcionario\{Desenvolvedor, Funcionario, Gerente};
use Alura\Banco\Service\ControladorDeBonificacoes;

$umFuncionario = new Desenvolvedor('Leonardo Nael', new Cpf('123.456.789-10'), 1000);
$umFuncionario1 = new Gerente('Josias', new Cpf('123.478.789-74'), 3000);

$controlador = new ControladorDeBonificacoes();
$controlador->adicionaBonificacaoDe($umFuncionario);
$controlador->adicionaBonificacaoDe($umFuncionario1);

echo $controlador->recuperaTotal();