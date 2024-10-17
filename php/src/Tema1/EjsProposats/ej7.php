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
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
        } else {
    ?>
    <form action="./ej7.php" method="post">
        <label for="nom">Nombre</label><br>
        <input type="text" name="nombre" id="nom"><br><br>
        <label for="ema">Dirección de correo</label><br>
        <input type="email" name="email" id="ema"><br><br>
        <label for="pass">Password</label><br>
        <input type="password" name="contraseña" id="pass"><br><br>
        <label for="pass2">Repetir Password</label><br>
        <input type="password" name="contraseña2" id="pass2"><br><br>
        <input type="submit" value="enviar"><br><br>
    </form>
    <?php
        }
    ?>
</body>
</html>