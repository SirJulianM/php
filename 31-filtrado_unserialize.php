<?php

class Clase1
{
    public $objeto1;
}

class Clase2 
{
    public $objeto2;
}

$clase1 = new Clase1();
$clase1->objeto1 = 5;

$clase2 = new Clase2();
$clase2->objeto2 = true;

$claseUSerializada = serialize($clase1);
$claseDSerializada = serialize($clase2);

print_r($claseUSerializada);
echo "<br /><hr />";
$variable1 = unserialize($claseUSerializada, array("allowed_classes" => true));
print_r($variable1);
echo "<br /><hr />";
$variable2 = unserialize($claseDSerializada, array("allowed_classes" => ['clase1', 'clase2']));
print_r($variable2);
echo "<br /><hr />";

?>