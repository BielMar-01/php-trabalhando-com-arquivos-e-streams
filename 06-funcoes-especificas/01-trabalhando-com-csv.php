<?php

$meusCursos = file('01-lista-cursos.txt');
$outrosCursos = file('02-lista-cursos.txt');

$arquivoCsv = fopen('cursos.csv', 'w');

foreach ($meusCursos as $curso) {
    $linha = [trim($curso), 'Sim'];

    fputcsv($arquivoCsv, $linha, ';');
}

foreach ($outrosCursos as $curso) {
    $linha = [trim($curso), 'Não'];

    fputcsv($arquivoCsv, $linha, ';');
}

fclose($arquivoCsv);