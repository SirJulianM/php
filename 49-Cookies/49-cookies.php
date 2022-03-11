<?php

/*

* setcookie(nombre, valor, expiración, ruta, dominio, seguridad)
? nombre = nombre de la cookie
? valor = valor a almacenar
? expiración = fecha y hora en la que la cookie dejará ser valida
? ruta = directores por los cuales la cookie será válida
? dominio = especifica los dominios donde será válida la cookie 

*/

/* setcookie("usuario", "Julián", time() + 36000, "/", "", 0);
echo $_COOKIE["usuario"]; */
setcookie("visitas", 1, time() + 36000, "/", "", 0);
if ($_COOKIE["visitas"]) 
{
    $_COOKIE["visitas"]++;
    setcookie("visitas", 1, time() + 36000, "/", "", 0);
}
echo "Has visitado este sitio ".$_COOKIE["visitas"]." veces.";
?>