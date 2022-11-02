<?php

$arquivo = fopen('01-lista-cursos.txt', 'r'); // Abre o arquivo

$tamanhoDoArquivo = filesize('01-lista-cursos.txt'); // Olha a quantidade de bites do arquivo

$cursos = fread($arquivo, $tamanhoDoArquivo); // Lendo todos os bites

echo $cursos;

fclose($arquivo); // Fecha arquivo