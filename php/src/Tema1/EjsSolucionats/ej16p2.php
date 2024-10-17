<?php
    $opciones = ["opcion1", "opcion2", "opcion3"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documento</title>
</head>
<body>
    <form action="" method="post">
        <label for="fic">Fichero</label><br>
        <input type="file" name="fichero" id="fic"><br><br>

        <?php
            for ($i = 0; $i<count($opciones); $i++){
                ?>
                    <input type="checkbox" id="<?=$opciones[$i]?>" name="opciones_form[]" value="<?=$opciones[$i]?>">
                    <label for="<?=$opciones[$i]?>"> <?=$opciones[$i]?></label><br>
                <?php
            }
        ?>
        <br>
        <input type="submit" value="enviar"><br><br>
    </form>
    <?php
    ?>
</body>
</html>