<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Selecció de productes</title>
</head>
<body>
    <h1>Carrito de la compra:</h1><br><br>
    <?php
    if (isset($_SESSION['carrito'])){
        foreach ($_SESSION['carrito'] as $unidad) {
            echo '<p>'.$unidad.'</p><br>';
        }
    };
    ?>
</body>
</html>