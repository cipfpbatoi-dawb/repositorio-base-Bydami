<?php
    $cadena = "haber si nos vamos ya pa casa"
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
        $total = [0,0,0,0,0];
        for ($i = 0; $i<strlen($cadena); $i++){
            match (true){
                $cadena[$i] == 'a' , $cadena[$i] == 'A' => $total[0]++,
                $cadena[$i] == 'e' , $cadena[$i] == 'E' => $total[1]++,
                $cadena[$i] == 'i' , $cadena[$i] == 'I' => $total[2]++,
                $cadena[$i] == 'o' , $cadena[$i] == 'O' => $total[3]++,
                $cadena[$i] == 'u' , $cadena[$i] == 'U' => $total[4]++,
                default => null,
           };
        }
        echo "En la frase \"$cadena\" hay:<br>";
        echo " -números de a = ".$total[0]."<br>";
        echo " -números de e = ".$total[1]."<br>";
        echo " -números de i = ".$total[2]."<br>";
        echo " -números de o = ".$total[3]."<br>";
        echo " -números de u = ".$total[4]."<br>";
        echo " -vocales totales = ".array_sum($total)."<br>";
    ?>
</body>
</html>