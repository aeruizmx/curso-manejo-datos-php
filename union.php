<?php

// Union

$frontend = ['javascript'];
$backend = ['php', 'laravel'];

echo "<pre>";
var_dump($frontend + $backend); // Unir pero se pierden keys en arrays simples

var_dump(array_merge($frontend, $backend)); // Union, pero hay perdida con key iguales

var_dump(array_merge_recursive($frontend, $backend)); // Union por medio de keys

$courses = ['js','php','laravel'];
$categories = ['front', 'back', 'framework'];
echo "<pre>";
var_dump(array_combine($categories, $courses));

