<?php 

/*print_r($_FILES['archivo']['tmp_name']);*/
print_r($_FILES);
echo "<br />".$_FILES['archivo']['name'];
move_uploaded_file($_FILES['archivo']['tmp_name'], '../51-Subida_de_archivos/CC.jpg');

/*

! Nota: para subir multiples archivos, lo mejor es hacerlo mediante un ciclo for que cuenta los archivos
! $_FILES['archivo]['tmp_name]-1

!Nota2: https://www.youtube.com/watch?v=PqhmbAeAJ9s&list=PLYAyQauAPx8luzry2eM5uoiFjaYFiHsy3&index=58

*/

?>