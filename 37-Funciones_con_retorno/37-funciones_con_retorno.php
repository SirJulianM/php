<?php

declare(strict_types = 1);
const PI = 3.14159;

function AreaCirculo(float $radio):float
{ 
    if ($radio < 0) 
    {
        return "No se puede calcular el área de circulo para ".$radio;
    } 
    else 
    {
        $area =  PI* pow($radio, 2);
        return $area;
    }
    
}

echo "El área del circulo es: ".AreaCirculo(5.5);
echo "<br /><hr />";
echo "El área del circulo es: ".AreaCirculo(8);
echo "<br /><hr />";

?>