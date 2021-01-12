<?php

// Array simple - aquel que no se le ha asignado keys
$courses = ['javascript', 'laravel', 'php', 'vuejs'];
echo "<pre>";
var_dump($courses);

echo "<br>";
// Array complejo
$courses = [
    'frontend' => 'javascript', 
    'framework' => 'laravel', 
    'backend' => 'php'
];
foreach ($courses as $key => $value) {
    echo "$key:$value <br>";
}

foreach ($courses as $course) {
    echo "$course <br>";
}
echo "<br>";
function upper($course, $key)
{
    echo strtoupper($course) . ":$key <br>";
}

array_walk($courses, 'upper');

array_key_exists('frontend', $courses); // Existe un key
in_array('javascript', $courses); // Existe un valor
array_keys($courses); // Lista todos los keys
array_values($courses); // Lista todos los valores