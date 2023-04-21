<?php

//: hora_desde y hora_hasta (que indican el horario de
// atención de la tienda), estado (abierta o cerrada), dirección y dueño.

class Disquera{

    private $hora_desde;

    private $hora_hasta;

    private $estado;

    private $direccion;

    private $objDueño;

    //Implementamos los metodos de acceso, get y set...

    public function getHora_desde(){
        return $this->hora_desde;
    }

    public function setHora_desde($hora_desde){
        $this->hora_desde = $hora_desde;
    }



    public function getHora_hasta(){
        return $this->hora_hasta;
    }

    public function setHora_hasta($hora_hasta){
        $this->hora_hasta = $hora_hasta;
    }



    public function getEstado(){
        return $this->estado;
    }

    public function setEstado($estado){
        $this->estado = $estado;
    }



    public function getDireccion(){
        return $this->direccion;
    }

    public function setDireccion($direccion){
        $this->direccion = $direccion;
    }



    public function getObjDueño(){
        return $this->objDueño;
    }

    public function setObjDueño($objDueño){
        $this->objDueño = $objDueño;
    }

    // Ahora creamos el metodo constructor de esta clase.

    public function __construct($hora_desde, $hora_hasta, $estado, $direccion, $objDueño){
        $this->hora_desde = $hora_desde;
        $this->hora_hasta = $hora_hasta;
        $this->estado = $estado;
        $this->direccion = $direccion;
        $this->objDueño = $objDueño;
    }

    //La hora esta en formato 24hs.
    public function dentroHorarioAtencion($hora,$minutos){
        $resultado = false;
        $hora_desde = $this->getHora_desde();
        $hora_hasta = $this->getHora_hasta();
        $horario = $hora . ":" . $minutos;

        $time1 = strtotime($hora_desde);
        $time2 = strtotime($hora_hasta);
        $time3 = strtotime($horario);

        if ($time3 > $time1 && $time3 < $time2){
            $resultado = true;
        }
        
        return $resultado;
    }
}