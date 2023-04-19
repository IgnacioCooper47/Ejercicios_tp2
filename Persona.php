<?php


class Persona{

    private $nombre;

    private $apellido;

    private $tipoDoc;

    private $numDocuento;

    public function __construct($nombre, $apellido, $tipoDoc, $numDocuento){
        //Metodo constructor de la clase Persona
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->tipoDoc = $tipoDoc;
        $this->numDocuento = $numDocuento;
    }

    public function getNombre(){
        return $this->nombre;
    }
    
    public function setNombre($nombre){
        $this->nombre = $nombre;
    }

    public function getApellido(){
        return $this->apellido;
    }
    
    public function setApellido($apellido){
        $this->apellido = $apellido;
    }

    public function getTipoDoc(){
        return $this->tipoDoc;
    }
    
    public function setTipoDoc($tipoDoc){
        $this->tipoDoc = $tipoDoc;
    }

    public function getNumDocumento(){
        return $this->numDocuento;
    }
    
    public function setNumDocumento($numDocuento){
        $this->numDocuento = $numDocuento;
    }

    public function __toString(){
        return "Nombre: " . $this->getNombre() . "\n Apellido: " . $this->getApellido() . "\n Tipo de documento: " . $this->getTipoDoc() . "\n Numero de documento: " . $this->getNumDocumento();
    }





}