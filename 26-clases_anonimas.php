<?php

interface Registro
{
    public function Registro(string $mensaje);
}

class Applicacion
{
    private $registro;

    public function getRegistro() : Registro
    {
        return $this->registro;
    }

    public function setRegistro(Registro $registro)
    {
        $this->registro = $registro;
    }
}

$app = new Applicacion();
$app->setRegistro(new class implements Registro{
    public function Registro(string $mensaje)
    {
        print($mensaje);
    }
});

$app->getRegistro()->Registro("Mi primer mensaje");


?>