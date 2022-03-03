<?php 

$identificador = getenv("HTTP_USER_AGENT");
//echo $identificador."<br />";

$navegador = "Navegador desconocido.";
if (preg_match("/MSIE/i", $identificador)) 
{
    $navegador = "Internet explorer";
}

elseif (preg_match("/Chrome/i", $identificador)) 
{
    $navegador = "Google Chrome o Chromium";
}

elseif (preg_match("/Mozilla/i", $identificador)) 
{
    $navegador = "Nozilla Firefox";
}

echo "Navegador: ".$navegador.", ";

$os = "Sistema operativo desconocido";

if (preg_match("/Windows/i", $identificador)) 
{
    $os = "Microsoft Windows";
} 
else if(preg_match("/Linux/i", $identificador)) 
{
    $os = "GNU/Linux";
}
else if(preg_match("/Mac/i", $identificador)) 
{
    $os = "Mac OS";
}

echo "Sistema operativo: ".$os;


?>