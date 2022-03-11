<?php

declare(strict_types=1);

/*
* include(): Continua la ejecución aunque el archivo no exista o tenga errores
* require(): Detiene la ejecución si no encuentra el archivo o hay errores en este
* require_once(): Crea una instancia del archivo a incluir

*/

include('menu.php');
require("funciones.php");

echo "Bienvenidos"."<br />";
echo sumar(4, 6);
echo "<br /><hr />";
require_once("clase.php");
/*
! Solo puedo llamar una sola vez a la clase con include o require, con require_once varias veces, pero no es recomendable
*/
$persona = new Persona();
echo $persona->getNombre()."<br />";
require_once("clase.php");
$persona2 = new Persona();
$persona2->setNombre("Mónica");
echo $persona2->getNombre();


?>