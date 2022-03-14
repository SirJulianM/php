<h2>Hola Sofí</h2>
<?php 
echo "Hola Eddie"."<br />";
session_start();
/* 
! Solo se puede iniciar sesión una vez
*/
$_SESSION["usuario"] = "Julián";
$_SESSION["id_usuario"] = "5";

if(isset($_SESSION["contador"]))
{
    $_SESSION['contador']++;
}
else
{
    $_SESSION['contador'] = 1;
}

echo "Has visitado esta página ".$_SESSION["contador"]." veces"."<br />";

session_destroy();
print_r($_SESSION); 
?>