<?php
    $arrayMultidimensional = [];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documento</title>
</head>
<body>
    <table cellspacing='0'>
    <?php
        for ($i = 0; $i < 5; $i++) {
            for ($j = 0; $j < 10; $j++) {
                $arrayMultidimensional[$i][$j] = ($i+1)." x ".($j+1)." = ".($i+1)*($j+1)."  ";
            }
        }
        for ($i = 0; $i < 5; $i++) {
            echo "<tr>";
            for ($j = 0; $j < 10; $j++) {
                echo "<td style=\"border-color: black; border-style: solid\">".$arrayMultidimensional[$i][$j]."</td>";
            }
            echo "</tr>";
        }
    ?>
    </table>
</body>
</html>