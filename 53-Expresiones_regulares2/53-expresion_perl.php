<?php

/*

! Metacarácteres
* . un caracter cualquiera
* \s un espacio en blanco
* \S un espacio no en blanco
* \d un dígito
* \D un NO dígito
* \w un caracter de una palabra
* \W un NO caracter de una palabra
* [aeiou] cualquiera de las letras dadas
* [^aeiou] ninguna de las letras dadas
* (foo|bar|baz) alguna de las alternativas

!modificadores

* i diferencias entre minúsculas y mayúsculas
* m salto de linea
* o evalúa solo una vez la expresión
* s permite que . encuentre un caracter de salto de linea
* x permite espacios en blanco para más claridad en la expresión
* g encuentra todas las coincidencias globalmente
* cg permite una busqueda para continuar aunque la busqueda global falle

*/

$email = "ing_julianmadrid@hotmail.com";

echo preg_match("/^[a-z0-9]+[_][a-z0-9]+[@][a-z0-9]+[.][a-z]{2,3}+([.][a-z]{2})?$/", $email); 
echo "<hr />";

$ip = "255.255.255.255";

echo preg_match("/^( ([0]?[0-9]?[0-9] | [1][0-9][0-9] | [2][0-5][0-5]) [.]{3} ([0]?[0-9]?[0-9] | [1][0-9][0-9] | [2][0-5][0-5]))$/x", $ip);

?>