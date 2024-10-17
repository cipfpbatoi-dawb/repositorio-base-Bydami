<?php
    setcookie(
        'user',
        'damian',
        [
            'expires' => time() + 3600, // 1 hora
            'path' => '/',
            'domain' => '', // Domini actual
            'secure' => true, // Només HTTPS
            'httponly' => true, // Només accessible via HTTP
            'samesite' => 'Strict' // o 'Strict' o 'None'
        ]
    );
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

</body>
</html>