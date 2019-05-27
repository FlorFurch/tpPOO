<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\clases;


abstract class Persona {

    var $dni;
    var $apellido;
    var $nombre;

    public function __construct(int $dni, string $apellido, string $nombre) {
        $this->dni = $dni;
        $this->apellido = $apellido;
        $this->nombre = $nombre;
    }

}

class Cliente extends Persona {

    var $numCliente;
   

    function __construct(int $dni, string $apellido, string $nombre, int $numeroCliente) {
        parent::__construct($dni, $apellido, $nombre);
        $this->numCliente = $numeroCliente;
    }

    
    
}
