<?php 

function Saludar()
{
    echo "Hola, como estás Julián";
}

if (function_exists("Saludar2")) 
{
    echo "Saludando desde la función Saludar2".'<br /><hr />';
} 
else 
{
    echo "Me despido desde la función Saludar2".'<br /><hr />';
}

Saludar();

echo "<br /><hr />";

function Suma()
{
    echo 4 + 5;
}

Suma();

echo "<br /><hr />";

function Fecha()
{
    echo date("Y-m-d");
}

Fecha();

echo "<br /><hr />";

function CargarTexto()
{
    $archivo = fopen('saludoMonik.txt', 'r');
    echo fread($archivo, 12);
}

CargarTexto();

echo "<br /><hr />";

/*

Nota: Las funciones las puedo llamar las veces que sea necesaria e inclusive
se puede llamar antes de que sea declarada

*/
?>