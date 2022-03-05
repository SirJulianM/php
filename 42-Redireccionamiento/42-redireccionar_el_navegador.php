<h1>Página principal</h1>
<!-- <script type="text/javascript">
    window.location ="inicio.html";
</script> -->
<?php

$redireccionar = false;

if ($redireccionar) 
{
    header("Location:inicio.html");    
} 
else 
{
    header("Location: sitio.html");
}


?>