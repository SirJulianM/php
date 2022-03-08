<form action="?id=5&datos=SoftwareEvolution" method="post">
    <div>
        <label for="">Numero1</label>
        <input type="number" name="numeroUno" id="" value="<?php echo $_REQUEST['numeroUno'] ?? ""; ?>">
    </div>
    <div>
        <label for="">Numero2</label>
        <input type="number" name="numeroDos" id="" value="<?php echo $_REQUEST['numeroDos'] ?? ""; ?>">
    </div>
    <div>
        <code>
            <?php
            
            function Sumar(int $num1, int $num2)
            {
                return $num1 + $num2;
            }

            if ($_POST && $_GET) 
            {
                $numero1 = $_REQUEST['numeroUno'];
                $numero2 = $_POST['numeroDos'];
                $id = $_REQUEST['id'];
                $datos = $_GET['datos'];
                echo "Dato enviado via post y llamado con request: ".$numero1."<br />";
                echo "Dato enviado via post y llamado con post: ".$numero2."<br />";
                echo "Dato enviado via get y llamado con request: ".$id."<br />";
                echo "Dato enviado via get y llamado con get: ".$datos."<br />";
            }
            
            ?>
        </code>
    </div>
    <input type="submit" value="Sumar">
</form>