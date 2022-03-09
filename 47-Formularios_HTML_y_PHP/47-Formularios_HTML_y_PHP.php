<form action="proceso.php" method="POST">
    <div>
        <label for="">Nombres: </label>
        <input type="text" name="nombres" id="nombres">
    </div>
    <br>
    <div>
        <label for="">Apellidos: </label>
        <input type="text" name="apellidos" id="apellidos">
    </div>
    <br>
    <div>
        <label for="">Carrera: </label>
        <select name="carrera" id="">
            <option value="Ingeniería de sistemas">Ingeniería de sistemas</option>
            <option value="Técnico en hardware">Técnico en Hardware</option>
            <option value="Tecnólogo en desarrollo de Software">Tecnólogo en desarrollo de Software</option>
        </select>
    </div>
    <br>
    <div>
        <label for="">Estado civil: </label>
        <label for="">Casado</label>
        <input type="radio" name="estadocivil" id="" value="Casado">
        <label for="">Soltero</label>
        <input type="radio" name="estadocivil" id="" value="Soltero">
        <label for="">Divorciado</label>
        <input type="radio" name="estadocivil" id="" value="Divorciado">
    </div>
    <br>
    <div>
        <label for="">Pasatiempos: </label>
        <label for="">Programar</label>
        <input type="checkbox" name="pasatiempos[]" id="" value="programar">
        <label for="">Tocar el piano</label>
        <input type="checkbox" name="pasatiempos[]" id="" value="tocar piano">
        <label for="">Ir a cine</label>
        <input type="checkbox" name="pasatiempos[]" id="" value="ir a cine">
    </div>
    <br>
    <div>
        <label for="">Acerca de mi</label>
        <textarea name="sobremi" id="" cols="30" rows="5"></textarea>
    </div>
    <br>
    <div>
        <input type="submit" value="Enviar">
    </div>
</form>