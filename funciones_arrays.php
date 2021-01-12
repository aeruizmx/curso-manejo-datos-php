<?php

$courses = [
    10 => 'php', 
    100 => 'javascript', 
    1000 => 'laravel'
];
sort($courses); // Ordenar por valor
echo "<pre>";
var_dump($courses);
echo "<br>";

ksort($courses); // Ordenar por key
echo "<pre>";
var_dump($courses);
echo "<br>";

krsort($courses); // Ordenar por key descendente
echo "<pre>";
var_dump($courses);
echo "<br>";

$result4=array_slice($courses,1); // Quitar el primer elemento
echo "<pre>";
var_dump($result4);
echo "<br>";

$courses2 = ['php', 'javascript', 'laravel'
];
$result5 = array_chunk($courses2, 1);
echo "<pre>";
var_dump($result5);
echo "<br>";

$result6 = array_shift($courses); // Eliminar y retornar primer valor
echo "<pre>";
var_dump($result6);
echo "<br>";

$result7 = array_pop($courses); // Eliminar y retornar ultimo valor
echo "<pre>";
var_dump($result7);
echo "<br>";

$result7 = array_unshift($courses,'NUevo valor'); // Agregar al inicio
echo "<pre>";
var_dump($result7);
echo "<br>";

$result7 = array_push($courses, 'Nuevo valor'); // Agregar al final
echo "<pre>";
var_dump($result7);
echo "<br>";

array_flip() // Intercambia valores - keys