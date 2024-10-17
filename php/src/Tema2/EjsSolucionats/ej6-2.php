<?php
    session_start();
    session_unset();
    session_destroy();
    header("Location: ./ej6.php");
    exit();
?>