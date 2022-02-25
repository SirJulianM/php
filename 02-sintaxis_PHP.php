<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //Comentario de un solo renglón
        /* 
            Comentario
            de
            multiples
            renglones
        */
        /* Cualquier código dentro de este campo se ejecutará en PHP, cualquier código fuera de este campo
        se ejecutará en HTML*/
        /* Las variables se deben escribir con este símbolo $ y no deben comenzar con número o un símbolo 
        extraño, estas deben comenzar con un guion bajo o con una letra */
        $numero1 = 10;
        $cadena1 = "hola";
        $cadena2 = 'adios';
        $cadena3 = '"Estoy entre comillas"';
        $cadena4 = "'Estoy entre comillas simples'";
        /* Para escribir cadenas podemos usar comillas dobles o comillas simples. Para encerrar un texto 
        entre comillas se debe escribir primero un estilo de comillas y luego el otro así: '" "' o "' '"*/
        $comilla5 = "\"Estoy en un caracter de escape\"";
        $numero2 = "50";
        /*No se recomenda colocar los números entre comillas */
        echo $numero1 + $numero2;
        /* Ojo que PHP distingue mayúsculas y minúsculas */
        

    ?>
</body>
</html>