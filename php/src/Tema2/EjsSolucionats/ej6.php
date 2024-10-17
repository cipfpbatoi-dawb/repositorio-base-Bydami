<?php
    $usuarios = ['user1' => '1234'];
    $mensaje = "";
    session_start();
    if (isset($_POST['user']) && isset($_POST['password'])) { 
        $user = $_POST['user'];
        $password = $_POST['password'];
        if (isset($usuarios[$user]) && $usuarios[$user] == $password) {
            $_SESSION['user'] = $user;
        }else{
            $mensaje = "Error de login";
        }
    }
    if (isset($_POST['borrar'])) {
        $borrar = $_POST['borrar'];
        if ($borrar){
            header("Location: ./ej6-2.php");
            exit();
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if (isset($_SESSION['user'])) { 
            ?>
                <h1>Muy buenas, bienvenido <?=$_SESSION['user']?></h1>
                <form action="" method="post">
                    <input type="hidden" name="borrar" value="true"><br><br>
                    <input type="submit" value="Salir de la sesion"><br><br>
                </form>
            <?php
        }else{
            ?>
            <?=$mensaje?>
            <br><form action="" method="post">
                <label for="use">User</label><br>
                <input type="text" name="user" id="use"><br><br>
                <label for="pass">Password</label><br>
                <input type="password" name="password" id="pass"><br><br>
                <input type="submit" value="enviar"><br><br>
            </form>
            <?php
        }
    ?>
</body>
</html>