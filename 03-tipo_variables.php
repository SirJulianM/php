<?php

/* 

PHP es un lenguaje debilmente tipado por lo cual no requiere especificar si es entero, cadena, flotante,
entre otros. 

Para comenzar una variable, siempre la debes comenzar con el signo de dólar ($) y siempre tendrá el valor
más reciente que se le asigne. A las variables siempre se les debe de asignar un valor

Notas: 
1) Usar print_r() para imprimir un arreglo completo, ya que si quieres imprimir una parte, puedes 
hacerlo con echo

2) El límite de un entero es 2.147.483.647 en un pc de 32 bits y en uno de 64 bits es 
9.223.372.036.854.775.807

3) Las cadenas de texto las puedes encerrar en comillas dobles o simples

4) Para concatenar (unir) dos cadenas de texto (string) solo es necesario un punto

5) \n Es el símbolo para una nueva línea, \t es un símbolo para tabulador y \r es para 'volver'
*/

$variable = 'Valor de la variable';
echo $variable."\n";
echo "<br />";
$variable = 'Esta variable tiene un valor distinto al inicial';
echo $variable."\n";
echo "<br />";
$integer = 4;
echo $integer;
echo "<br />";
$double = 8.578;
echo $double;
echo "<br />";
$booleano = false;
echo $booleano;
echo "<br />";
$arreglo = ["foo", "bar", "hello", "world"];
print_r($arreglo);
echo "<br />";
$arreglo2 = array("Julián", "Mónica", "Edward", "Sofía");
print_r($arreglo2);
echo "<br />";
$arreglo_asociativo = array('nombre' => "Julián", 'pasatiempo' => "Estudiar PHP");
print_r($arreglo_asociativo);
echo "<br />";
//$objeto = new object(); //Ej: $resources = new mysqli("localhost", "root", "123456", "bd");
$saludo = 'Hola';
$nombre = "Julián";
echo $saludo . " " . $nombre;
?>