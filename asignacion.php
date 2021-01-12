<?php
echo 'un texto de una linea
varias lineas
comilla simple\' backslash \\ continuar con mas texto <br>';

$name = 'andres';
echo "Mi nombre es $name <br>";

$courses = [
    'backend' => 'PHP'
];
class User 
{
    public $name = 'Italo';
}
$user = new User;
echo "$user->name quiere aprender {$courses['backend']}";

$teacher = 'Italo';
$italo = 'Profesor de PHP';
echo "$teacher es ${$teacher}";

function getTeacher()
{
    return 'teacher';
}
$teacher = 'Italo';
echo "{${getTeacher()}} enseña PHP";