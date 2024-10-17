<?php
class Cotxe {
    
    private string $marca;
    private string $modelo;

    public function __construct(string $marca, string $modelo) {
        $this->marca=$marca;
        $this->modelo=$modelo;
    }

    public function mostraInformacio() {
        echo "Cotxe ".$this->marca." amb modelo ".$this->modelo;  
    }
}

$cotxe1 = new Cotxe("Marca1", "Modelo1");
$cotxe1->mostraInformacio();
?>