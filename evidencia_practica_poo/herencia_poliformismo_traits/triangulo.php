<?php
//herencia y polimorfismo
class triangulo extends figura {

    //simula herencia multiple, tiene mayor jerarquía que la herencia original
    use traitCombinado;

    public function perimetro() {
        return 'triangulo-perimetro';
    }

    public function area () {
        return 'triangulo-area';
    }   
} 