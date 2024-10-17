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
        echo "nom del script executat, relatiu al document root".$_SERVER["PHP_SELF"]."<br><br>";
        echo "nom del script executat, relatiu al document root".$_SERVER["SERVER_SOFTWARE"]."<br><br>";
        echo "domini, àlies DNS".$_SERVER["SERVER_NAME"]."<br><br>";
        echo "GET".$_SERVER["REQUEST_METHOD"]."<br><br>";
        echo "URI, sense el domini".$_SERVER["REQUEST_URI"]."<br><br>";
        echo "tot el que va després de ? en la URL".$_SERVER["QUERY_STRING"]."<br><br>";
    ?>
</body>
</html>