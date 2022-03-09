<?php

if ($_POST) 
{
    $nombre = $_POST['nombre'];
    $direccion = $_POST['direccion'];
}

echo "Hola, mi nombre es ".$nombre." y mi dirección es ".$direccion;

?>