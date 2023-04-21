<?php

class CuentaBancaria{

    private $numCuenta;

    private $objPersona;

    private $saldoActual;

    private $intAnual;

    public function __construct($numCuenta, $objPersona, $saldoActual, $intAnual){
        //metodo contstructor de la clase CuentaBancaria
        $this->numCuenta = $numCuenta;
        $this->objPersona = $objPersona;
        $this->saldoActual = $saldoActual;
        $this->intAnual = $intAnual;
    }

    public function getNumCuenta(){
        return $this->numCuenta; 
    }

    public function setNumCuenta($numCuenta){
        $this->numCuenta = $numCuenta;
    }


    public function getObjPersona(){
        return $this->objPersona; 
    }

    public function setObjPersona($objPersona){
        $this->objPersona = $objPersona;
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
        $saldo = $this->getSaldoActual();
        $interes = $this->getIntAnual();

        $interes = $interes / 365;

        $valorActualizado = (($saldo / 100) * $interes);

        $valorActualizado = $valorActualizado + $saldo;

        $this->setSaldoActual($valorActualizado);
    }

    public function depositar($cant){
        //funcion que suma la cantidad que quiera el usuario al saldo.
        $saldo = $this->getSaldoActual();
    
        $saldo = $saldo + $cant;

        $this->setSaldoActual($saldo);
    }

    public function retirar($cant){
        //Retira la cantidad que indique el usuario de la cuenta.
        $saldo = $this->getSaldoActual();
    
        $saldo = $saldo - $cant;

        $this->setSaldoActual($saldo);
    }

    public function mostrarObj(){
        //muestra el objeto
        $persona = $this->getObjPersona();
        $cadena = "\n Nombre: " . $persona->getNombre() . "\n Apellido: " . $persona->getApellido() . "\n Tipo de documento: " . $persona->getTipoDoc() . "\n Documento: " . $persona->getNumDocumento();
        return $cadena;
    }

    public function __toString(){
        return "\nNumero de cuenta: " . $this->getNumCuenta() . "\n Saldo actual: " . $this->getSaldoActual() . "\n Interes anual: " . $this->getIntAnual() . $this->mostrarObj();
    }


}