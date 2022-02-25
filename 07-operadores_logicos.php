<?php

$valor1 = 6;
$valor2 = 6;
$valor3 = 8;
$valor4 = 9;

/* 
    Nota: En PHP se puede usar para añadir and o && pero se recomienda el último,
    lo mismo que para comparar, puedes usar or o || y también se recomienda el último
 */

if($valor1 == $valor2 && $valor2 < $valor3 && $valor3 > $valor1)
{
    echo "Las condiciones se cumplen";
}
else
{
    echo "Las condiciones no se cumplen";
}
echo "<br /><hr />";
if($valor1 != $valor2 || $valor2 > $valor3 || $valor3 > $valor1)
{
    echo "Las condiciones se cumplen";
}
else
{
    echo "Las condiciones no se cumplen";
}
echo "<br /><hr />";
/* 
    Las operaciones va de izquierda a derecha y siempre se resuelven primero los parentesis 
*/
if($valor1 == $valor2 && ($valor2 < $valor3 || $valor3 < $valor1) && $valor1 <= $valor4)
{
    echo "Las condiciones se cumplen";
}
else
{
    echo "Las condiciones no se cumplen";
}
echo "<br /><hr />";
if($valor1 == $valor2 xor $valor3 < $valor2)
{
    echo "Solo una de las condiciones es verdadera";
}
else
{
    echo "Ambas condiciones o ninguna es verdadera"; 
}

?>