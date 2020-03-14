<?php

class Persona
{
    //atributos
    public $nombre;
    public $apellido;
    
    //Constructor
    public function __construct()
    {
        $this->nombre = "Hola"; 
    }
    //Metodos
    public function saludar($nombre)
    {
        echo "Hola Como estas del Virus ".$nombre;
    }
}





?>