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
        $email = $_POST["email"];
        $mensaje = $_POST["mensaje"];
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "$mensaje";
        } else {
            echo "Invalido";
        }
    ?>
</body>
</html>