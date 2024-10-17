<?php
$nombre = "Persona";
$edad = "";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documento</title>
</head>
<body>
    <form action="" method="post">
        <label for="nom">Nombre</label><br>
        <input type="text" name="nombre" id="nom"><br><br>
        <label for="eda">Edad</label><br>
        <input type="number" name="edad" id="eda"><br><br>
        <input type="submit" value="enviar"><br><br>
    </form>
    <?php
        $nombre = $_POST["nombre"];
        $edad = $_POST["edad"];
        echo "<h1> Hola $nombre </h1> <p> con $edad años</p>";
    ?>
</body>
</html>