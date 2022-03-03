<?php

declare(strict_types=1);

function sumar(int $num1, int $num2):int
{
    return $num1 + $num2;
}

function saludar(string $nombre):string
{
    return "Hola ".$nombre;
}

$i = 0;
switch ($i) 
{
    case 1:
        $funcion = 'sumar';
        echo $funcion(5,7);
        break;

    case 0: 
        $funcion = "saludar";
        echo $funcion('Julián');
        break;
}

/* $funcion = 'sumar';
echo $funcion(5,7);
echo "<br /><hr />";
$funcion = "saludar";
echo $funcion('Julián');
 */

?>