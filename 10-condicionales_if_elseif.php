<?php

$edad = 44;
$sexo = "M";

if ($edad > 17 && $edad < 40) 
{
    echo "Eres un adulto";
    if($sexo === "M")
    {
        echo " y eres del sexo másculino";
    }
    elseif ($sexo === "F") 
    {
        echo " y eres del sexo femenino";
    }
    else
    {
        echo " y el carácter del sexo está erroneo. Debes colocar M o F";
    }
}
else
{
    echo "Es menor de edad o una persona de la tercera edad";
    if($sexo === "M")
    {
        echo " y eres del sexo másculino";
    }
    elseif ($sexo === "F") 
    {
        echo " y eres del sexo femenino";
    }
    else
    {
        echo " y el carácter del sexo está erroneo. Debes colocar M o F";
    }
}
echo "<br /><hr />";

$valor = 10;

if($valor % 2 === 0)
{
    echo "Es un número par";
}
else
{
    echo "Es un número impar";
}

?>