<?php

/* Foreach solo se usa en el caso de ciclos, no se usa para otros tipos de variables */

$arreglo = array(1,2,3,4,5);

foreach ($arreglo as $valor) 
{
    echo $valor."<br />";
}

echo "<hr />";

$datos = array("nombre" => "Julián", "barrio" => "Bomboná 1", "lugar de estudio" => "ITM");

foreach ($datos as $d) 
{
    echo $d."<br />";
}

echo "<hr />";

foreach ($datos as $key => $value) 
{
    echo "El indice ".$key." tiene el valor de ".$value."<br />";
}

echo "<hr />";

$matriz = array(array(1,2,3,4,5), array("José", "Pedro", "Carlos"));

foreach ($matriz as $indice) 
{
    //echo $indice."<br />"; Esto produce error, hazlo con print_r
    print_r($indice); 
}
echo "<br /><hr />";

foreach ($matriz as $indice) 
{
    foreach ($indice as $dato) 
    {
        echo $dato."<br />";
    }
}



?>