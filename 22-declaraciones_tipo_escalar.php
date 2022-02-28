<?php 

/* 

Modo coercivo: Es el modo por defecto y no necesita ser declarado. Ej:
funcion nombre(tipo variable, tipo variable)
{

}
modo estricto: tiene que ser declarado. Ej
declare(strict_type = 1);
funcion nombre(tipo variable, tipo variable)
{

}
tipos de datos: int, float, string, interfaces, array, callable

*/

declare(strict_types=1);

function Sumar(int $a, int $b)
{
    return $a + $b;
}

echo Sumar(4, 45);
echo "<hr /><br />";

//------------------------------------------------------------------------------------------------------

function Booleana(bool $c)
{
    return $c;
}

echo Booleana(true);
echo "<hr /><br />";

/* 

Nota: Los declare obligan a que se cumpla la condición y siempre deben ir  
de la función y solo se debe escribir una sola vez
*/

?>