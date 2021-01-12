<?php
function greet($name)
{
    return "HOla, $name";
}

echo greet('Andres');

//Referencias
$course = 'PHP';
function path(&$course)
{
    $course = 'Laravel';
    echo $course; // IMprime laravel
}

path($course);
echo $course; // Imprime laravel

// Predeterminado
function greet2($name = 'Andrew')
{
    return "Hola, $name";
}
echo greet2();
echo greet2('Otro nombre');