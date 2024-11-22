<?php

$notasBimestre1 = [
    'Vinicius' => 9,
    'Joao' => 8,
    'Ana' => 10,
    'Roberto' => 7,
    'Maria' => 9
];

$notasBimestre2 = [
    'Joao' => 8,
    'Ana' => 10,
    'Roberto' => 7,
    'Maria' => 9
];

var_dump(array_diff($notasBimestre1, $notasBimestre2));