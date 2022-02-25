<?php

//break;

for ($i=0; $i < 10; $i++) 
{
    if($i == 8)
    {
        break;
    }
    echo $i."<br />";
}

echo "Se detuvo el ciclo porque se encontró un número 8";
echo "<br />";
echo "<hr />";

$arreglo = array('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i');

for ($i=0; $i < count($arreglo); $i++) 
{ 
    if ($arreglo[$i] == 'd') 
    {
        break;
    }
    echo $arreglo[$i]."<br />";
}

echo "Se detuvo el ciclo porque se encontró una letra d";
echo "<br />";
echo "<hr />";

//continue

for ($i=0; $i < count($arreglo); $i++) 
{ 
    if ($arreglo[$i] == 'c') 
    {
        continue;
    }
    echo $arreglo[$i]."<br />";
}
echo "Se saltó el ciclo porque se encontró una letra c";
echo "<br />";
echo "<hr />";

$a = 0;

while ($a <= 10) 
{
    if($a == 6)
    {
        $a++;
        continue;
    }
    echo $a."<br />";
    $a++;
}

echo "Se saltó el ciclo porque se encontró el número 6";
echo "<br />";
echo "<hr />";

/* 

Nota: Con while se debe incrementar antes de hacer un continue, de lo contrario se quedará haciendo 
un ciclo infinito 

*/
?>