<?php

class Persona
{
    private $nombre = "Julián";

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }
}


?>