<?php

include_once "Persona.php";

$nombre = "fausto";
$apellido = "Bilo";
$n1 = "DNI";
$n2 = "44705523";

$persona = new Persona($nombre, $apellido, $n1, $n2);

echo $persona;

