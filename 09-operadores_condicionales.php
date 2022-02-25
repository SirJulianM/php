<?php

$edad = 18;
$mensaje = '';
$mensaje2 = '';

if($edad > 17)
{
    $mensaje = "Usted es mayor de edad";
}
else
{
    $mensaje = "Usted es menor de edad";
}

echo $mensaje;

echo "<br /><hr />";

$mensaje2 = $edad > 17 ? "Usted es mayor de edad" : "Usted es menor de edad";

echo $mensaje2;
?>