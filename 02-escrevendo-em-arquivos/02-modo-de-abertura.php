<?php

$arquivo = fopen('cursos-php-02.txt', 'a'); //Abrindo para escrever sem sobrescrever textos

$curso = "Design Patterns PHP I: Boas práticas de programação\n";

fwrite($arquivo, $curso);

$curso1 = "Design Patterns PHP II: Boas práticas de programação\n";

fwrite($arquivo, $curso1);

fclose($arquivo);

