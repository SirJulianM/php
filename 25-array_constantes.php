<?php

/*define('ARREGLO', Array(4,6,7));

print_r(ARREGLO);*/

define('ARREGLO2', Array("nombre"=>"Julián", "apellidos" =>"Madrid"));

print_r(ARREGLO2);

echo "<br /><hr />";

echo ARREGLO2["nombre"]."<br />";
echo ARREGLO2["apellidos"]."<br />";
/* Nota: las constantes se escriben en MAYÚSCULAS */

?>