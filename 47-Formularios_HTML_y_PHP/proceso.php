<?php 

if ($_POST) 
{
    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $carrera = $_POST['carrera'];
    $estadoCivil = $_POST['estadocivil'];
    $pasatiempos = $_POST['pasatiempos'] ?? null;
    $sobreMi = $_POST['sobremi'];
    echo "Tu nombre es: $nombres $apellidos"."<br />";
    echo "Eres de la carrera $carrera"."<br />";
    echo "Tu estado civil es $estadoCivil"."<br />";
    echo "Tus pasatiempos son: "."<br /><ul>";
    if($pasatiempos)
    {
        foreach ($pasatiempos as $p) 
        {
            echo "<li>$p</li>";
        }
    }
    else
    {
        echo "No seleccionaste ningún pasatiempo";
    }
    echo "</ul><br />";
    echo "y tu descripción es $sobreMi";
}

?>