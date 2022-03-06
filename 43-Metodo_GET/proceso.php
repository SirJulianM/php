<?php

function Sumar(int $a, int $b)
{
    return $a + $b;
}

$pnumero = $_GET["pnumero"];
$snumero = $_GET["snumero"];

echo Sumar($pnumero, $snumero);
echo "<br />"."Nombre de la persona que hizo la operación: ".$_GET["nombre"];

?>