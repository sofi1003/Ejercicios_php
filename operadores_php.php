<?php  
//operadores

//IGUAL
 $a = 5 == 5;
 var_dump($a);
 echo "<br>";
 //DIFERENTE
$e = 3 === 3.0;
var_dump($e);
echo "<br>";
//Desigual

$i = 5 != 5;
var_dump($i);
echo "<br>";
$i = 5 <> 9;
var_dump($i);
echo "<br>";
//Mayor, mayor que,menor,menor que
$o = 9 >= 9;
var_dump($o);

echo "<br>";
$o = 9 <= 9;
var_dump($o);

echo "<br>";
$o = 9 > 9;
var_dump($o);

echo "<br>";
$o = 9 < 9;
var_dump($o);
echo "<br>";
/*SPACESHIP
0 = ambos son iguales
1 = izquierda es mayor
-1= izquierda es menor*/

$u = 6<=>9;
var_dump($u);
echo "<br>";
$u = 9<=>9;
var_dump($u);
echo "<br>";
$u = 19<=>9;
var_dump($u);
echo "<br>";

//operadores logicos

//devuelve lo contrario
$b = !(5 > 10);
var_dump($b);
echo "<br>";
echo "<br>";

//AND, verdadero cuando ambas devuelven true
$c = 5 >3 && 4 < 10;
var_dump($c);
echo "<br>";
$c = 1 >3 && 4 < 10;
var_dump($c);
echo "<br>";

//OR
$c = 5 >3 || 4 < 10;
var_dump($c);
echo "<br>";

$c = 1 >3 || 4 < 10;
var_dump($c);
echo "<br>";
echo "<br>";







?>