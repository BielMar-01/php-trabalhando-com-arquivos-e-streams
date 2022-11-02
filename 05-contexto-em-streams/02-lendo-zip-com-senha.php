<?php

$contexto = stream_context_create([
    'zip' => [
        'password' => '123456'
    ]
]);

echo file_get_contents('zip://lista-cursos.zip#lista-cursos.txt', false, $contexto);


