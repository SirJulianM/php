<?php 

$matriz = array(array(2, 'Julián', 4.34), array(8, 9, 'Esteban'));

print_r($matriz);
echo "<br /><hr />";

$superMatriz = array('array uno' => array(2, "José", 4.24), 'array dos' => array(8, 9, "Carlos"));
print_r($superMatriz);
echo "<br /><hr />";

/* 
Un arreglo puede ir dentro de otro arreglo y pueden haber multiples arreglos
dentro de otros arreglos 
*/

$supermatriz2 = array('array uno' => array(array('Valor interno 1'), array('varlor interno 2')), 'array dos' => array(2, 4, 'Hola'));

foreach ($supermatriz2 as $nivelUno) 
{
    foreach ($nivelUno as $nivelDos) 
    {
        print_r($nivelDos);
    }
}
?>