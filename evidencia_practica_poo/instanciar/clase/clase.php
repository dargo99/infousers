<?php

class aprenderBackend extends block_base{
    
    //atributos - datos
    public $lenguaje;
    public $servidores;
    public $git;
    //static $linux; se acceden con ::
    //privada / encapsulamiento / no se puede modificar
    private $moodle;

    //métodos - funcionalidad
    public function __construct($lg, $srv, $lnx, $control,$lms) {
        $this->lenguaje = $lg;
        $this->servidores = $srv;
        $this->linux = $lnx;
        $this->git = $control;
        $this->moodle = $lms;
    }

    public function sumar($a, $b) {
        $resultado = $a + $b;
        return $resultado . "\n";
        
    }

    //se ejecuta siempre al final
    public function __destruct() {
        echo "Destruir objeto owo \n";
    }    

    //esto se debe usar más como una plantilla
    //no es buena práctica tener más de una clase en un mismo archivo
}