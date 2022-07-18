<?php

//Funciones con Arrays

$color = array('rojo', 'verde', 'azul', 'rosa');

array_splice($color,3);

echo "<pre>";
var_dump($color);

$numeros = array(1,2,3,4,5,6);
$nombres = array('perez', 'gonzales', 'barrera', 'cerpa');

//Contar elementos de array
echo count($numeros);

//Buscar elementos de un Array
echo array_search('gonzales', $nombres);

//fusionar 2 o más arrays
$nu1 = array(1,2,3);
$nu2 = array(4,5,6);
$nu3 = array(7,8,9);

$final = array_merge($nu1, $nu2, $nu3);
echo "<pre>";
var_dump($final);


//Ordenar un array

$nu1 = array(6,2,3);
$nu2 = array(8,5,4);
$nu3 = array(4,1,9,0);

$final = array_merge($nu1, $nu2, $nu3);

asort($final);

echo "<pre>";
var_dump($final);

arsort($final);
echo "<pre>";
var_dump($final);
?>

