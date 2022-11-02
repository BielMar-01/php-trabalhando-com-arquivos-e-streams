<?php

/*
 * $tela = fopen('php://stderr', 'w'); // Essa é a saida de erro
 * $tela = fopen('php://stdout', 'w'); // Essa é a saida em tela
 *
 * ====Saidas Padrão====
 * fwrite(STDOUT, 'Ola mundo');
 * fwrite(STDERR, 'Ola mundo');
 */

$cursos = fopen('zip://cursos-php.zip#cursos-php.txt', 'r');
stream_copy_to_stream($cursos, STDOUT);


