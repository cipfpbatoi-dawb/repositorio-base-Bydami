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
    <form action="./ej16p2.php" method="post" enctype="multipart/form-data">
        <label for="fic">Fichero</label><br>
        <input type="file" name="fichero" id="fic"><br><br>

        <?php
            for ($i = 0; $i<count($opciones); $i++){
                ?>
                    <input type="checkbox" id="<?=$opciones[$i]?>" name="<?=$opciones[$i]?>" value="<?=$opciones[$i]?>">
                    <label for="<?=$opciones[$i]?>"> <?=$opciones[$i]?></label><br>
                <?php
            }
        ?>
        <br>
        <input type="submit" value="enviar"><br><br>
    </form>
    <?php
        if (isset($_POST['btnSubir']) && $_POST['btnSubir'] == 'Subir') {
            if (is_uploaded_file($_FILES['fichero']['tmp_name'])) {
                // subido con éxito
                $nombre = $_FILES['fichero']['name'];
                move_uploaded_file($_FILES['fichero']['tmp_name'], "./uploads/{$nombre}");
        
                echo "<p>Archivo $nombre subido con éxito</p>";
            }
        }
    ?>
</body>
</html>