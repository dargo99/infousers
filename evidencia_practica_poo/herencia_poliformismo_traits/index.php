<?php

//VISIBILIDAD/SCOPES VARIABLES PHP
//public: acceso desde cualquier parte
//protected: acceso solo en la misma clase y en las que se heredan
//private: acceso solo en la misma clase

require 'figura.php';
require 'figuraTrait.php'; //el orden importa
require 'otroTrait.php';
require 'traitCombinado.php';
require 'triangulo.php';
require 'cuadrado.php';


$cuadrado = new cuadrado(4, 10);
$triangulo = new triangulo(3, 10);

echo 'POLIMORFISMO'."\n";
echo "cuadrado perimetro:" . $cuadrado->perimetro() . "\n";
echo "triangulo perimetro:" . $triangulo->perimetro() . "\n";
echo "triangulo area: " . $triangulo->area() . "\n";
echo "cuadrado area: " . $cuadrado->area() . "\n";
echo "cuadrado volumen: " . $cuadrado->volumen() . "\n";
// echo $cuadrado->medida . "\n"; //error: el atributo esta protegido
echo $triangulo->volumen() . "\n";
echo $triangulo->otro() . "\n";
echo $triangulo::otroStatic() . "\n";