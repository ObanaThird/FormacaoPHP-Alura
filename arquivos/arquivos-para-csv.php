<?php

$meusCuros = file('lista-cursos.txt');
$outrosCuros = file('lista-cursos.txt');

$arquivoCsv = fopen('crusos.csv', 'w');

foreach ($meusCuros as $curso) {
    $linha = [trim(utf8_decode($curso)), 'Sim'];

    fputcsv($arquivoCsv, $linha, ';');
}

foreach ($outrosCuros as $curso) {
    $linha = [trim($curso), 'Não'];

    fputcsv($arquivoCsv, $linha, ';');
}

fclose($arquivoCsv);