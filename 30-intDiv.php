<?php 

//Antes de PHP 7
$cociente = 56/3;
echo $cociente." Valor original".'<br />';
echo floor($cociente)." Valor redondeado".'<br />';
echo ceil($cociente). " Valor aproximado";
echo "<br /><hr />";
//PHP 7
echo intdiv(56.9, 3.99); //Transforma en enteros la división de decimales

?>