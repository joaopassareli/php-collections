<?php

$cursos1 = [
    'Introdução ao PHP',
    'DDD com PHP',
    'Boas Práticas',
    'Coleções em PHP',
];

//Com o array_push() podemos adicionar diversos valores ao final do array;
$cursos2 = [
    'Orientação a Objetos',
    'Testes com PHPUnit',
    'Introdução ao S.O.L.I.D.'
];

$cursos = array_merge($cursos1, $cursos2);

//Remove o primeiro item do array $cursos e atribui ao array $first
$first = array_shift($cursos);

//Remove o último item do array $cursos e atribui ao array $last
$last = array_pop($cursos);

//Adiciona um valor ao início do array $cursos
array_unshift($cursos, 'Instalando PHP');

var_dump($cursos, $first, $last);