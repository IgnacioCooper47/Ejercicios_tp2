<?php

class CuentaBancaria{

    private $numCuenta;

    private $dni;

    private $saldoActual;

    private $intAnual;

    public function __construct($numCuenta, $dni, $saldoActual, $intAnual){
        //metodo contstructor de la clase CuentaBancaria
        $this->numCuenta = $numCuenta;
        $this->dni = $dni;
        $this->saldoActual = $saldoActual;
        $this->intAnual = $intAnual;
    }

    public function getNumCuenta(){
        return $this->numCuenta; 
    }

    public function setNumCuenta($numCuenta){
        $this->numCuenta = $numCuenta;
    }


    public function getDni(){
        return $this->dni; 
    }

    public function setDni($dni){
        $this->dni = $dni;
    }


    public function getSaldoActual(){
        return $this->saldoActual; 
    }

    public function setSaldoActual($saldoActual){
        $this->saldoActual = $saldoActual;
    }
   

    public function getIntAnual(){
        return $this->intAnual; 
    }

    public function setIntAnual($intAnual){
        $this->intAnual = $intAnual;
    }

    public function actualizarSaldo(){
        //funcion que actualiza el saldo del usuario con el interes diario.
        $saldo = $this->saldoActual;
        $interes = $this->intAnual;

        $interes = $interes / 365;

        $valorActualizado = (($saldo / 100) * $interes);

        $this->setSaldoActual($valorActualizado);
    }

    public function depositar($cant){
        //funcion que suma la cantidad que quiera el usuario al saldo.
        $saldo = $this->saldoActual;
    
        $saldo = $saldo + $cant;

        $this->setSaldoActual($saldo);
    }

    public function retirar($cant){
        //Retira la cantidad que indique el usuario de la cuenta.
        $saldo = $this->saldoActual;
    
        $saldo = $saldo - $cant;

        $this->setSaldoActual($saldo);
    }

    public function __toString(){
        return "\nNumero de cuenta: " . $this->getNumCuenta() . "\n DNI: " . $this->getDni() . "\n Saldo actual: " . $this->getSaldoActual() . "\n Interes anual: " . $this->getIntAnual();
    }


}