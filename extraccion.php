<?php

$data = 'Estudio PHP';
echo $data[0];
echo $data{0};

$post = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi fugit hic incidunt cumque architecto, aperiam repellat, officia minus nesciunt repudiandae delectus. Officiis, quo natus sequi quas ex doloremque unde vel".
$extraccion = substr($post, 0, 20);
echo "$extraccion... [ver mas]";

$data = 'javascript, PHP, laravel';
$tags = explode(', ',$data);
echo "<pre>";
var_dump($tags);

$courses = [
    'javascript',
    'PHP',
    'laravel'
];
echo implode(', ',$courses);

$course = "        Curso de php";
$course = trim($course);
echo "<pre>";
echo "Quiero aprender $course, y otro texto";