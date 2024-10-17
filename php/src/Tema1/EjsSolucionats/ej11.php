<?php
    $a = 10;
    $b = 5;
    $operacio = '+';
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
        $resultat = match ($operacio){
            '+' => $a + $b,
            '-' => $a - $b,
            '*' => $a * $b,
            '/' => $a / $b,
            default => 'error 404',
        };
        echo "el resultado de $a $operacio $b es $resultat";
    ?>
</body>
</html>