<?php

/*

fopen();
fclose();
filesize();
fread();
fwrite();

r: abre el archivo como solo lectura
r+: abre el archivo para lectura y escritura
w: abre el archivo para solo escritura. Coloca el puntero al inicio del archivo
w+: abre el archivo para lectura y escritura. Coloca el puntero al inicio del archivo
a: abre el archivo solo para escritura. Coloca el puntero al final del archivo
a+: abre el archivo para lectura y escritura. Coloca el punter al final del archivo I

*/

//---------------------------------Lectura + Escritura --------------------------

$ruta = "Database.txt";
$archivo = fopen($ruta, "r+");
$tamanio = filesize($ruta);
$contenido = fread($archivo, $tamanio);
echo $contenido;
fwrite($archivo, " ¿Cómo estás?");
fclose($archivo);
echo "<br /><hr />";
echo $contenido;
echo "<br /><hr />";

//------------------------------Escritura + Lectura --------------------------------------

$ruta2 = "Database2.txt";
$archivo2 = fopen($ruta2, "w+");
$tamanio2 = filesize($ruta2);
$contenido2 = fwrite($archivo2, $tamanio2);
fwrite($archivo2, " Estás muy hermosa");
echo $contenido2;
echo "<br /><hr />";

//------------------------------Escritura + Lectura 2 --------------------------------------

$ruta3 = "Database3.txt";
$archivo3 = fopen($ruta3, "a+");
$tamanio3 = filesize($ruta3);
$contenido3 = fwrite($archivo3, $tamanio3);
fwrite($archivo3, " Que tengas un feliz día");
echo $contenido3;

/* Nota: Este tema lo debo consultar mejor */

?>