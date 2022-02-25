<?php 

/*

$array = array("nombre_del_indice" => "valor a asignar", "nombre_del_indice" => "valor a asignar");

*/

$array = array("nombre_del_indice" => "valor a asignar", "nombre" => "José", "año actual" => "2022");

print_r($array);
echo "<br />";
print_r($array["nombre"]);
echo "<br /><hr />";
$arrayName = array('Nombre' => 'Julián', 'Ciudad' => 'Medellín', 'País' => 'Colombia', 'Pasatiempo' => 'Programar');
foreach ($arrayName as $valor) 
{
    echo $valor."<br />";
}
echo "<hr/>";
//Recomendable escribir de esta manera
foreach ($arrayName as $llave => $valor) 
{
    echo $valor."<br />";
}

?>