<?php
    function suma($n1, $n2) {
        return $n1 + $n2;
    }

    function mult($n1, $n2) {
        return $n1 * $n2;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documento</title>
</head>
<body>
    <?= "5 + 3 = ".suma(5,3)?>
    <br>
    <?= "4 x 7 = ".mult(4,7)?>
    <br>
</body>
</html>