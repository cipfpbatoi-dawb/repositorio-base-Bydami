<?php
    $array = [1,2,3,4,5];
    function mitjana($array_temp) {
        $mediana = 0;
        $total = 0;
            foreach ($array_temp as $num){
                $total += $num;
                $mediana = $total/count($array_temp);
            }
            echo $mediana."<br>";
    };
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
        echo mitjana($array);
    ?>
</body>
</html>