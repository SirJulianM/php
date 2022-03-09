<form action="?id=5" method="post">
    <div>
        <label for="">Número 1</label>
        <input type="number" name="pnumero" id="" value="<?php echo $_REQUEST['pnumero'] ?? null ?>">
    </div>
    <br>
    <div>
        <label for="">Número 2</label>
        <input type="number" name="snumero" id="" value="<?php echo $_REQUEST['snumero'] ?? null ?>">
    </div>
    <br>
    <div>
        <code>
            <?php
                function Sumar(int $a, int $b)
                {
                    return $a + $b;
                }

                if($_POST || $_GET)
                {
                    $numero1 = $_REQUEST['pnumero'];
                    $numero2 = $_REQUEST['snumero'];
                    echo "El resultado de la suma es: ".Sumar($numero1, $numero2);
                    echo "<br />"."El id es igual a ".$_REQUEST['id'];
                }
            ?>
        </code>
    </div>
    <br>
    <input type="submit" value="Sumar">
</form>