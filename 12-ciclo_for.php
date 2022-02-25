<?php

/* echo "Una sola tabla"."<br />";
$num = 5;
echo "Tabla de ".$num;
echo "<br />";
for ($i=0; $i <=10; $i++) 
{ 
    $producto = $i * $num;
    echo $num." X ".$i. " = ".$producto;
    echo "<br />";
} */
echo "<hr /><br />";
for ($i=1; $i <11 ; $i++) 
{ 
    echo "Tabla del ".$i."<br />";
    for ($j=1; $j <11 ; $j++) 
    { 
        $prod = $i * $j;
        echo $i. " X ".$j." = ".$prod;
        echo "<br />";
    }
    echo "<hr />";
}
echo "Lista de array"."<br />";
$array = array("José", "Pedro", "Juan", "Cesar");

for ($i=0; $i <count($array) ; $i++) 
{ 
    echo $array[$i]."<br />";
}

echo "<hr />";
echo "Cuenta regresiva"."<br />";

for ($k=50; $k>=0; $k--) 
{ 
    echo $k;
    echo"<br />";
}

?>