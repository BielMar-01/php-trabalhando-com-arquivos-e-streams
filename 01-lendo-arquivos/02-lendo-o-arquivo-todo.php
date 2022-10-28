<?php

$arquivo = fopen('lista-cursos.txt', 'r'); // Abre o arquivo

$tamanhoDoArquivo = filesize('lista-cursos.txt'); // Olha a quantidade de bites do arquivo

$cursos = fread($arquivo, $tamanhoDoArquivo); // Lendo todos os bites

echo $cursos;

fclose($arquivo); // Fecha arquivo