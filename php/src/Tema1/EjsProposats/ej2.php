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
        echo "Bucle For";
        for ($i = 0; $i <21; $i+=2){
            echo "<br>$i";
        };
        echo "Bucle While";
        $j = 0;
        while($j<21){
            echo "<br>$j";
            $j+=2;
        };
    ?>
</body>
</html>