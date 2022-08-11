<?php
//interface heredada
require_once 'volumen.php';

interface geometria extends volumen {
    public function perimetro();
    public function area();
}