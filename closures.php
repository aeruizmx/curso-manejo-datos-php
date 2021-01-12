<?php

// Funcion anonima - Variable que requiere lógica
$greet = function ($name)
{
    return "Hola, $name";
};

echo $greet('Andrés');

function saludar(Closure $lang, $name)
{
    return $lang($name);
}

$es = function($name)
{
    return "Hola, $name";
};
$en = function($name)
{
    return "Hello, $name";
};
echo saludar($es, 'Andres');