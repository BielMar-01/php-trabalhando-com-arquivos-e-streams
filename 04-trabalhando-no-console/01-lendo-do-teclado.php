<?php

/**
 * Primeiro jeito de se fazer
* $teclado = fopen('php://stdin', 'r');
*
* $novoCurso = trim(fgets($teclado));
*
* file_put_contents('lista-cursos.txt', "\n$novoCurso", FILE_APPEND);
*/

$novoCurso = trim(fgets(STDIN));
file_put_contents('lista-cursos.txt', "\n$novoCurso", FILE_APPEND);
