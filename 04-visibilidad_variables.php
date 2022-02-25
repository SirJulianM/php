<?php

/* 

Hay cinco tipos de visibilidad de variables en PHP
- Variables globales: Son elementos que son invocados desde el principio del archivo y en cualquier momento
estas pueden ser convocadas y cambiadas
- Variables locales: Son elementos que son invocados dentro de una función y solo se puede cambiar cuando esta
se esté ejecutando dentro de la función
- Variables estáticas: Es la elemento que cambia de valor solo la cantidad de veces que se invoca la función
- Constantes: Son elementos que son invocados y no pueden cambiar de valor en todo el archivo;
- Parámetros de funciones: Son los elementos que son invocados al principio de la función para que estos sean
cambiados dentro de ella

*/

$variableGlobal = 'soy una variable global';
define('VALOR_PI', 3.14159);
define('NOMBRE', 'Edward');

echo constant('VALOR_PI');
echo "<br />";

function Saludar()
{
    GLOBAL $variableGlobal;
    $variableLocal = "soy una variable local";
    echo "<b>Llamado dentro de la función saludar</b>";
    echo "<br />";
    echo $variableGlobal;
    echo "<br />";
    echo $variableLocal;
    STATIC $variableEstatica = 0;
    $variableEstatica++;
    echo "<br />";
    echo $variableEstatica;
    echo "<br />";
}

function Despedida()
{
    echo $variableLocal;
}

function Suma($num1, $num2)
{
    echo $num1 + $num2;
}

Saludar();
Saludar();
Saludar();
Saludar();
echo "<br />";
echo VALOR_PI;
echo "<br />";
echo NOMBRE;
echo "<br />";
define('NOMBRE', 'Sofía');
echo NOMBRE;
//Despedida();
echo "<br />";
echo "<b>Llamado fuera de la función saludar</b>";
echo "<br />";
echo $variableGlobal;
echo "<br />";
Suma(1,2);
echo "<br />";
//echo $variableLocal;    

/* Nota: Las constantes siempre es bueno definirlas en mayúsculas */
?>