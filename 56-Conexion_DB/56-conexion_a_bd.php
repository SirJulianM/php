<?php

/* include("datos_conexion.php");

try 
{
    $pdo = new PDO("pgsql:host=".SERVER."; port=5432; dbname=".DBNAME, USER, PASSWORD);
} 
catch (Exception $error) 
{
    print "Error: ".$error->getMessage()."<br />";
    die();
} */

$servidor = "127.0.0.1";
$usuario = "postgres";
$password ="Admint2016";
$database = "coreTelemed";

$mysqli = new PDO("pgsql:host=".$servidor."; port=5432; dbname=".$database, $usuario, $password);

$resultados = $mysqli->query("select * from departamentos");

foreach ($resultados as $r) {
    print_r($r["var_departamento"]."<br />");
}

?>