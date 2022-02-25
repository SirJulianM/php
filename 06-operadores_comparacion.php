<?php
/* Operaciones de comparación */

$valor1 = 5;
$valor2 = "5";

if($valor1 == $valor2)
{
    echo "Son números iguales";
}
else
{
    echo "Son números diferentes";
}
echo "<br /><hr />";
$valor5 = 5;
$valor6 = 5;
if($valor5 == $valor6)
{
    echo "Son números iguales";
}
else
{
    echo "Son números diferentes";
}
echo "<br /><hr />";
$valor3 = true;
$valor4 = false;

if($valor3==$valor4)
{
    echo "Son valores iguales";
}
else
{
    echo "Son valores diferentes";
}
echo "<br /><hr />";
$valor7 = 5;
$valor8 = 8;
if($valor7 != $valor8)
{
    echo "No son valores iguales";
}
else
{
    echo "Son valores iguales";
}
echo "<br /><hr />";
$valor9 = 5;
$valor0 = 8;
if($valor9 > $valor0)
{
    echo "Valor1 es mayor a Valor2";
}
else
{
    echo "Valor1 es menor a Valor2";
}
echo "<br /><hr />";
$valor11 = 5;
$valor12 = 8;
if($valor11 < $valor12)
{
    echo "Valor1 es mayor a Valor2";
}
else
{
    echo "Valor1 es menor a Valor2";
}
echo "<br /><hr />";
if($valor11 >= $valor12)
{
    echo "Valor1 es mayor o igual a Valor2";
}
else
{
    echo "Valor1 es menor o igual a Valor2";
}
echo "<br /><hr />";
if($valor11 <= $valor12)
{
    echo "Valor1 es mayor o igual a Valor2";
}
else
{
    echo "Valor1 es menor o igual a Valor2";
}
echo "<br /><hr />";
?>