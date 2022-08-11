<?php

require_once ('geometria.php');
//interfaces (implements)
class figura implements geometria {
    protected $lados;
    protected $medida;

    public function __construct($lados, $medida) {
        $this->lados = $lados;
        $this->medida = $medida;
    }

    public function perimetro() {
        return 'figura-perimetro';
    }

    public function area () {
        return 'figura-area';
    }

    public function volumen () {
        return 'figura-volumen';
    }

    public function otro () {
        return 'figura-otro';
    }
}