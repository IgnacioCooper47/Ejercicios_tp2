<?php

include_once "Persona.php";
include_once "CuentaBancaria.php";

echo "Bienvenido a Tu cuenta bancarioa!";


$persona = new Persona("fausto", "Biló", "Dni", 44705523);
$cuenta = new CuentaBancaria(2342, $persona, 240000, 78);

echo $cuenta;

$cuenta->actualizarSaldo();

echo "\n\n";
echo $cuenta->getSaldoActual();