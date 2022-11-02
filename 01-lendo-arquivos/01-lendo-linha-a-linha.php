<?php

$arquivo = fopen('01-lista-cursos.txt', 'r');

while(!feof($arquivo)) {
    $curso = fgets($arquivo);

    echo $curso;
}

fclose($arquivo);