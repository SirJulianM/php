<?php 

class Persona
{
    private $edad = 20;

    public function Saludar(string $nombre)
    {
        echo "Hola $nombre";
    }
}

$value = function($nombre)
{
    return $this->Saludar($nombre);
};

$edad2 = function()
{
    return $this->edad;
};

echo $value->call(new Persona, "Julián");
echo "<br />";
echo $edad2->call(new Persona);
?>