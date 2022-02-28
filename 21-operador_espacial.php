<?php

/*

Retorna -1 si es menor
Retorna 0 si es igual
Retorna 1 si es mayor
Se símboliza con un <=>

*/

$num1 = 5;
$num2 = 4;

echo $num1 <=> $num2;
echo "<br/><hr/>";
echo $num2 <=> $num1;
echo "<br/><hr/>";
echo $num2 <=> $num2;
echo "<br/><hr/>";

//También funciona con cadenas de caracteres y esta compara el contenido

$cad1 = "Hola Mundo";
$cad2 = "Pink Floyd";

echo $cad1 <=> $cad2;
echo "<br /><hr />";
echo $cad2 <=> $cad1;
echo "<br /><hr />";

/*
También compara arrays, normalmente lo hace con la suma dentro de sus elementos, en caso de ser iguales
los compara por posicionamiento
*/

$array1 = array(4,7,4);
$array2 = array(3,4,5);

echo $array1 <=> $array2;
echo "<br /><hr />";

$array3 = array("aaaa", "aa", "a");
$array4 = array("a", "aa", "aaaa");

echo $array3 <=> $array4;
echo "<br /><hr />";




?>