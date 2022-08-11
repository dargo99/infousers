<?php
//herencia y polimorfismo
class cuadrado extends figura {

    public function perimetro() {
        return 'cuadrado-perimetro';
    }

    public function area () {
        return 'cuadrado-area';
    }
}