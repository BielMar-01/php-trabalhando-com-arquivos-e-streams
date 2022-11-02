<?php

$arquivoCursos = fopen('01-lista-cursos.txt', 'r');

stream_filter_append($arquivoCursos, 'string.toupper');

echo fread($arquivoCursos, filesize('01-lista-cursos.txt'));

