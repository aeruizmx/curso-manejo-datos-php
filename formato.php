<?php

// Alterar
$text = "PHP es un LENGUAJE, año 2020, programación";
echo strtolower($text);
echo strtoupper($text);
echo ucfirst($text);
echo lcfirst($text);

// Reemplazar
$slug = str_replace(' '.'-', $text);
echo strtolower($slug);

// Modificación
$code = 39;
echo str_pad($code, 8, '#', STR_PATH_LEFT);

// Quitar etiquetas
echo strip_tags($text);

echo strtoupper($text); // Monobyte
echo mb_strtoupper($text); // Multibyte
