<?php

$cursos = file_get_contents('01-lista-cursos.txt');
echo $cursos;

$cursos1 = file('01-lista-cursos.txt');
var_dump($cursos1);
