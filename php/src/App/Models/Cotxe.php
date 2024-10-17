<?php
namespace DTF\Models;

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
?>