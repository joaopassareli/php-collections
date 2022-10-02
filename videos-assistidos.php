<?php

require_once('Video.php');

$video1 = new Video('Aprendendo Mapas');
$video2 = new Video('Aprendendo Conjuntos');

$videosAssistidos = new SplObjectStorage();

//Ambas as formas tem o mesmo resultado, são semelhates.
$videosAssistidos[$video1] = new DateTimeImmutable('2022-10-02');
$videosAssistidos->attach($video2, new DateTimeImmutable('2022-10-03'));

echo $videosAssistidos(spl_object_hash($video1))->format('d/m/Y');