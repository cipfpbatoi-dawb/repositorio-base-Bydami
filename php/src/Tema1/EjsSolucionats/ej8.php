<?php
    $animals = ["gat", "gos"];
    function afegir_element ($array, $element){
        $array[] = $element;
        return $array;
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
    <?php
        $animals = afegir_element($animals, "conill");
        foreach ($animals as $animal){
            echo "$animal"."<br>";
        }
    ?>
</body>
</html>