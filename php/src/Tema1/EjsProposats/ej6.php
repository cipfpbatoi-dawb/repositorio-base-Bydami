<?php
    $nota = 8;
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
        $nota_texto = match ($nota){
            10 => "Excel·lent",
            9, 8 => "Molt bé",
            7, 6, 5 => "Bé",
            default => "Insuficient",
        }
    ?>
    <h1>Tu nota: <?= $nota?></h1>
    <h2><?= $nota_texto?></h2>
</body>
</html>