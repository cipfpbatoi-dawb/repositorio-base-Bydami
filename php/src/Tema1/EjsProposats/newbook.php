<?php
    
?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Alta Llibre</title>
    <style>
        .error {
            color: red;
        }
    </style>
</head>
<body>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_FILES["photo"]) && $_FILES["photo"]["error"] == 0) {
                $ubi_temp = $_FILES["photo"]["tmp_name"];
                echo "<img src=".$ubi_temp."/>";
            } else {
                echo "<p>Error al pujar el fitxer.</p>";
            }
        } else {

        }
    ?>
</body>
</html>
