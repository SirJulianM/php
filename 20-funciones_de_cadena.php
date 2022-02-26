<?php

/*

Funciones de cadena
- Comillas dobles
- Comillas simples
- Constantes de cadena
- \n: Nueva línea
- \r: Retorno 
- \t: Tabulador
- \$: Mostrar signo $
- \": Mostrar comilla doble
- \\: Mostrar barra invertida
- . : Símbolo concatenador
- strlen(): Longitud de una cadena
- strpost(): Cuenta la posición donde está una letra o una palabra
- substr(): Extrae la posición de una cadena

*/

$string1 = "Estoy entre comillas dobles";
$string2 = 'Estoy entre comillas simples';

/* 
    Nota: Puedo meter comillas simples dentro de comillas dobles y viceversa, para poner comilla doble dentro
    de otra comilla doble se debe hacer con este signo \"  
*/

$string3 = "Esto es un texto de \"comillas dobles\" dentro de otro texto de comillas dobles";
$string4 = 'Esto es un texto de \'comillas simples\' dentro de otro texto de comillas simples';

echo $string1."<br /><hr/>";
echo $string2."<br /><hr />";
echo $string3."<br /><hr />";
echo $string4."<br /><hr />";

// echo "primera línea \n segunda línea \r tercera línea\t ";

/* Nota: \n, \t, \r no funcionan con Chrome. Debo investigar si funciona con PHP 8 */

$monik = "Mónica";

echo "La variable tiene el valor de $monik"."<br /><hr />";
echo 'La variable tiene el valor de $monik'.'<br /><hr />';

/* 
Nota: La comilla doble te permite imprimir variables dentro de un texto (aunque esto no es recomendado), 
mientras que la comilla simple no lo permite*/

$mundo = "mundo";
echo "Hola ".$mundo.". Adiós.".'<br /><hr />';

$nombre = "Edward";
if (strlen($nombre)<2) 
{
    echo "El nombre debe tener dos o más carácteres";
} 
else 
{
    echo "Longitud de carácteres válida";
}
echo '<br /><hr />';

echo strpos($string4, "otro").'<br /><hr />';
echo substr($string4, 49, 4); //Cadena de texto, desde que posición, cuantas posiciones va a imprimir


?>