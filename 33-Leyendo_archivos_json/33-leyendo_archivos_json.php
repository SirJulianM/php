<?php

$conf = "database.json";
$configuracion = json_decode(file_get_contents($conf));
print_r($configuracion);
$configuracion->db->servidor = "localhost";
$configuracion->db->usuario = "root";
$configuracion->db->password = "1234";
$configuracion->db->tabla = "SoftwareEvolution";

$archivo = fopen($conf, "w+");
fwrite($archivo, json_encode($configuracion));
echo "<br /><hr />";
print_r($configuracion);

?>