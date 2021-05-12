<?php

class Persona
{
    var  $nombre;
    var  $apellido;
    var  $correo;
    var  $telefono;
    var  $direccion;
    var  $departamento;

    public function __construct($nombre, $apellido , $correo, $telefono , $direccion , $departamento)
    {
        $this->nombre = $nombre;
        $this->apellido =  $apellido;
        $this->correo =  $correo;
        $this->telefono = $telefono;
        $this->direccion =  $direccion;
        $this->departamento =  $departamento;

    }
    
}


?>