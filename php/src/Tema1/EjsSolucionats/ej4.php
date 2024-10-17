<?php
    $edat = 0;
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
        if ($edat <= 0) {
            echo "Edat invàlida";
        } elseif ($edat < 18) {
            echo "Ets menor d'edat";
        } else {
            echo "Ets major d'edat";
        }
    ?>
</body>
</html>