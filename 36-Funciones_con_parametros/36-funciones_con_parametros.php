<?php

declare(strict_types = 1);

function Saludar(string $nombre, string $apellido)
{
    echo "Hola ".$nombre." ".$apellido;
}

Saludar("Julián", "Madrid");

echo '<br /><hr />';

function Sumar(int $num1, int $num2)
{
    echo $num1 + $num2;
}

Sumar(4,9);
echo '<br /><hr />';

function SumarSucesion(array $numeros)
{
    $suma = 0;
    foreach ($numeros as $num) 
    {
        $suma = $suma + $num;
    }
    echo $suma;
}

SumarSucesion([4, 5, 8, 9, 14]);

echo '<br /><hr />';

?>