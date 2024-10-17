<?php
    $colorp = isset($_COOKIE['color']) ? $_COOKIE['color'] : 'white';

    if (isset($_POST['color'])){
        $colorp = $_POST['color'];
        setcookie('color',$colorp, time() + 3600, '/');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        div { 
            height: 500px;
            width: 500px;
        }
    </style>
</head>
<body>
    <form action="" method="post">
        <label for="col">Color:</label><br>
        <input type="color" name="color" id="col"><br><br>
        <input type="submit" value="enviar"><br><br>
    </form><br><br>
    <h1>COLOR SELEC:</h1><br>
    <div style="<?php
                    echo 'background-color:'. $colorp .';';
            ?>"></div>
    <?php

    ?>
</body>
</html>