<?php

require 'clase/clase.php';

//instanciar
$loQueNecesito = new aprenderBackend("PHP", "AWS", "Ubuntu", "GITHUB", "Moodle");

echo $loQueNecesito->linux . "\n";
echo $loQueNecesito->sumar(40, 2);