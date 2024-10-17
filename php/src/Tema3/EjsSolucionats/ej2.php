<?php
class Cotxe {
    
    private string $marca;
    private string $modelo;

    public function __construct(string $marca, string $modelo) {
        $this->marca=$marca;
        $this->modelo=$modelo;
    }

    // public function __destruct() {
    //     echo "Clase destruida"."<br>";
    // }

    public function mostraInformacio() {
        echo "Cotxe ".$this->marca." amb modelo ".$this->modelo."<br>";  
    }
}

$cotxe1 = new Cotxe("Marca1", "Modelo1");
$cotxe1->mostraInformacio();
$cotxe1->__destruct();
$cotxe1->mostraInformacio();
?>