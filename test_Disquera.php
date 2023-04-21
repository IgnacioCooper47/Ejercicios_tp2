<?php

include_once "Disquera.php";

echo "Bienvenido a la disquera ;)\n";

$disquera = new Disquera("08:30", "20:30", "cerrada", "arrayanes", "");

echo "Ingrese el horario que queres ir\n";

echo "Ingrese la hora: ";
$hora = trim(fgets(STDIN));

echo "Ingrese los minutos: ";
$minutos = trim(fgets(STDIN));

$resultado = $disquera->dentroHorarioAtencion($hora,$minutos);

if ($resultado){
    echo "esta abierto!";
} else {
    echo "esta cerrado!";
}

