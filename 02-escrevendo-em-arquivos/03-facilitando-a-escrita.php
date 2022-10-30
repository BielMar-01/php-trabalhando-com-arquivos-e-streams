<?php

$curso = "\nDesign Patterns PHP II: Boas práticas de programação";

file_put_contents('cursos-php-03.txt', $curso, FILE_APPEND);
//file_put_contents('cursos-php-03.txt', $curso, FILE_APPEND | FILE_TEXT);

