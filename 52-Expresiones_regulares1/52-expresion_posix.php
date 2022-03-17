<?php

/*

* [0-9] Coincidencia de digitos del cero al nueve
* [a-z] Coincidencia de minúsculas desde la a hasta la z
* [A-Z] Coincidencia de mayúsculas desde la a hasta la z
* [a-Z] Coincidencia de mayúsculas o minúsculas desde la a hasta la z

* p+ Coincidencia de al menos una p
* p* Coincidencia de cero o más p
* p? Coincidencia de que haya o no p
* p{N} Coincidencia de cualquier cantidad de p
* p{5,7} Coincidencia de 5 hasta 7 p
* p{2,} Coincidencia de al menos 2 p
* p$ Coincidencia de una p al final de la cadena
* p^ Coincidencia de una p al inicio de la cadena

*ereg()
*ereg_replace()
*eregi()
*eregi_replace()
*split()
*spliti()
*sql_regcase()
* son funciones eliminadas a partir de php7
https://stackoverflow.com/questions/2217850/how-to-replace-ereg
*/

$cadena = "Hola mundo";

echo preg_match("[a]", $cadena);


?>