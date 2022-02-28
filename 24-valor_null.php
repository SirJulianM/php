<?php

//Ahora en PHP 7
$_GET["Nombre"] = "Mónica";
$variable = $_GET["Nombre"] ?? "No se recibió el nombre";

echo $variable."<br /><hr />";

//Antes de PHP 7
$_GET['Apellido'] = "Hincapié";
$variable2 = $_GET["Apellido"] = isset($_GET['Apellido']) ? $_GET['Apellido'] : "No se recibió el apellido";

echo $variable2."<br /><hr />";

$_GET['Nombre'] = 'Julián';
$_GET['Apellido'] = 'Madrid';
$_GET['Pais'] = null;
//Asignará el valor que no encuentre vacío
$variable3 = $_GET['Nombre'] ?? $_GET['Apellidos'] ?? $_GET['Pais'] ?? "No se recibió alguna variable";

echo $variable3."<br /><hr />";

?>