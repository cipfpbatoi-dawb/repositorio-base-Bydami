<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo json_encode($_SESSION);
        echo 'Usuario: '.$_SESSION['nombre'].'<br>';
        echo 'Rol: '.$_SESSION['rol'].'<br>';
    ?>
</body>
</html>