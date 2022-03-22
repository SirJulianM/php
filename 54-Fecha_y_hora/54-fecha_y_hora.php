<?php

/*

* time(): Cantidad de segundos transcurridos desde el 1 de enero de 1970
* getDate(): acepta un timestamp y devuelve un array asociativo
* date(formato, timestamp): Devuelve una cadena formateada de fecha
* a: a.m. | p.m.
* A: A.M. | P.M.
* d: día del mes
* D: día de la semana en tres letras
* F: nombre del mes
* h: hora en formato de 12 horas
* H: hora en formato de 24 horas
* g: formato de 12 horas sin cero inicial
* G: formato de 24 horas sin cero inicial
* i: minutos
* j: día del mes sin ceros
* l: día de la semana
* L: mes del año con ceros
* M: mes del año en tres letras
* r: fecha de formato rfc 2822
* n: mes del año sin ceros
* s: segundos de la hora
* U: timestamp
* y: año en dos dígitos
* Y: año en cuatro dígitos
* z: día del año 
* Z: diferencia en segundos con respecto a GMT
*/

echo time()."<br />"; // ! Esto no es recomendado ya que imprime el tiempo en segundos

/* for ($i=0; $i < 10000000; $i++) 
{ 
    echo "";
} */

print_r(getdate()); // ? Este devuelve un array
echo "<br />";

$fecha = getdate();
echo $fecha['year']."<br />";
echo $fecha['seconds']."<br />";
echo date('a')."<br />";
echo date('D')." ".date('d')."<br />";
echo date('Y-m-d: H:i:s')



?>