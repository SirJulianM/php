<?php

declare(strict_types=1);
function Sumar(int $a, int $b) : int
{
    return $a + $b;
}

echo Sumar(4,6);
echo "<br /><hr />";

function Booleana(bool $valor) : bool
{
    return $valor;
}

echo Booleana(true);

?>