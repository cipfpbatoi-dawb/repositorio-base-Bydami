<?php
    require_once $_SERVER["DOCUMENT_ROOT"].'/../vendor/autoload.php';

    use DTF\Models\Cotxe;

    $cotxe = new Cotxe("Toyota", "Corolla");
    echo $cotxe->mostraInformacio() . "<br>"
?>