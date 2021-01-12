<?php
// / - Contenedor
// ^ - Inicio
// $ - Final
// - Rangos (0-9)
// [] - Patron [0-9]
// {} - Condición

$password = '123456';
// de 6 a 9 digitos numericos
var_dump((bool) preg_match('/^[0-9]{6,9}$/',$password));