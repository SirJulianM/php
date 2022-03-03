<?php 

declare(strict_types = 1);

function Saludar(string $fechaNacimiento = null, string $nombre, string $email = null)
{
    if ($email) 
    {
        return "Hola ".$nombre.", naciste el ".$fechaNacimiento." y tu correo es ".$email;
    } 
    else 
    {
        return "Hola ".$nombre.", naciste el ".$fechaNacimiento." y no tienes correo electrónico";
    }
}

echo Saludar("30-03-1987", "Julián", "ing_julianmadrid@yopmail.com");

/* No poner todos los campos genera un error, si no lo especificas bien. Pilas*/

?>