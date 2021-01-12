<?php

// Comparaciones
$courses = ['javascript', 'php'];
$wishes = ['php', 'laravel', 'javascript', 'vuejs'];

echo "<pre>";
var_dump(array_diff($wishes, $courses)); // Diferencias

$arrayA = [1,2,3,4,5];
$arrayB = [3,4,5,6,7];
var_dump(array_diff($arrayA, $arrayB)); // Imprime 1 y 2

array_diff_assoc(); // Valores y keys