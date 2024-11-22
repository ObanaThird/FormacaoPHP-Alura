<?php

$notas = [
    'Vinicius' => 6,
    'João' => 8,
    'Ana' => 10,
    'Roberto' => 7,
    'Maria' => 9,
];

ksort($notas);
var_dump($notas);

$array = [
    'chave1' => 'valor 1',
    'chave2' => 2,
    'chave3' => null,
];
var_dump(array_key_exists('chave3', $array));