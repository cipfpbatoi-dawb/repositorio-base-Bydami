<?php
    $producte = "llet";
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
        $preu = match ($producte){
            "pa" => 1.00,
            "llet" => 0.80,
            "formatje" => 2.50,
            default => 0,
        };
        echo "El precio de $producte es $preu €";
    ?>
</body>
</html>