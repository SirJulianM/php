<form action="proceso.php" method="post">
    <div>
        <label for="">Nombre:</label>
        <input type="text" name="nombre" id="">
    </div>
    <br>
    <div>
        <label for="">Dirección</label>
        <input type="text" name="direccion" id="">
    </div>
    <br>
    <input type="submit" value="Enviar">
</form>

<!--
    Nota: Se puede mezclar POST y GET colocando los datos que irán en GET en la parte de action. 
    Estos irán constantes, pero no es recomendable hacerlo

    https://www.youtube.com/watch?v=ReqWiDulW4Y&list=PLYAyQauAPx8luzry2eM5uoiFjaYFiHsy3&index=49
-->