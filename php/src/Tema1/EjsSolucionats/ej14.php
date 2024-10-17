<?php

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
        <label for="ema">Dirección de correo</label><br>
        <input type="email" name="email" id="ema"><br><br>
        <label for="eda">Edad</label><br>
        <input type="number" name="edad" id="eda"><br><br>
        <input type="submit" value="enviar"><br><br>
    </form>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nombre = htmlspecialchars($_POST['nombre']);
            $email = htmlspecialchars($_POST['email']);
            $edad = htmlspecialchars($_POST['edad']);

            $mensaje = match (true){
                empty($nombre) => "Error, el campo Nombre está vacío",
                empty($email) => "Error, el campo Email está vacío",
                empty($edad) => "Error, el campo Edad está vacío",
                default => "Todo bien",
            };

            echo "$mensaje";
        }
    ?>
</body>
</html>