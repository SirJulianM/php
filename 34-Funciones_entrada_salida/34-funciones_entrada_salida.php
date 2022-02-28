<?php

//Imprime el nombre del archivo en la página web
echo basename('../01-hola_mundo.php');

 //Copia un archivo y lo dirige a un destino (ojo hay que especificar el nombre)
copy("MonikGold.jpg", "../MonikGold.jpg");

//Borrar un archivo
unlink("../MonikGold.jpg");

//Imprimir el nombre del directorio
echo "<br />";
echo dirname('cursoPHP/01-hola_mundo.php');

//Imprimir la cantidad de espacio libre del disco duro
echo "<br />";
echo diskfreespace("C:/")/1024/1024/1024;

//Probar este
echo "<br />";
//fgetcsv();

//Hora en que se abrió un archivo
echo "<br />";
echo fileatime('MonikGold.jpg'); //Nota convertir en fecha

/* Más información: https://www.php.net/manual/en/ref.filesystem.php */


?>