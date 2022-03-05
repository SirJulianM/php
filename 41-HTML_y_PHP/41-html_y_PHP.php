<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php echo "The Shield"; ?>
    </title>
    <link rel="shortcut icon" href="Monik6.ico" type="image/x-icon">
</head>
<body>
    <?php 
        echo "<h1>Hola Mónik</h1>";
        echo "<select>";
        for ($i=1; $i <= 10; $i++) 
        { 
            echo "<option>$i</option>";
        }
        echo "</select>";
    ?>
    <hr>
    <h2>Otra manera de hacerlo</h2>
    <select name="" id="">
    <?php
        for ($i=1; $i <= 10; $i++) 
        { 
            echo "<option>$i</option>";
        }
    ?>
    </select>
</body>
</html>