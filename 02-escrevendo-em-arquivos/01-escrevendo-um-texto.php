<?php

$arquivo = fopen('cursos-php.txt', 'w'); //Abrindo para escrever

$curso = 'Design Patterns PHP I: Boas práticas de programação';

fwrite($arquivo, $curso);

$curso1 = 'Design Patterns PHP I: Boas práticas de programação';

fwrite($arquivo, $curso1, 21);

fclose($arquivo);
