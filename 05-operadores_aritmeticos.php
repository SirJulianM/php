<?php 

/* Operadores aritméticos */
$valor1 = 9;
$valor2 = 5;
$suma = 4 + 6 + 9 + 7; 
$suma = $valor1 + $valor2;
echo "El resultado de la suma es: ".$suma;
echo "<br />";
$resta = 5 - 6 - 3 -8; 
$resta = $valor1 - $valor2;
echo "El resultado de la resta es: ".$resta;
echo "<br />";  
$multiplicacion = $valor1 * $valor2;
echo "El resultado de la multiplicación es: ".$multiplicacion;
echo "<br />";
$division = $valor1 / $valor2;
echo "El resultado de la división es: ".$division;
echo "<br />";
$residuo = $valor1 % $valor2;
echo "El residuo de la división es: ".$residuo;
echo "<br />";
$valor3 = 1;
$valor3++;
$valor3++;
echo "El incremento de valor es: ".$valor3;
echo "<br />";
$valor4=50;
$valor4--;
echo "El decremento de valor es: ".$valor4;
echo "<br />";

/* 
Nota: 
1) Las operaciones básicas pueden aceptar enteros y decimales
2) No existe incremento para multiplicaciones y divisiones
*/
?>