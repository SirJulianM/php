<?php

$i = 1;
while ($i <= 50) 
{
    echo $i."<br />";
    $i++;
}
echo "<hr />";

$j = 0;
$array = array('José', 'Pedro', 'Carlos', 'Jorge');

while ($j < count($array)) 
{
    if($array[$j] === 'Carlos')
    {
        echo "<b>".$array[$j]."</b><br />";
    }
    else
    {
        echo $array[$j]."<br/>";
    }
    $j++;

}

?>