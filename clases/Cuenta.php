<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\clases;

include ("Persona.php");

/* creo una nueva cuenta
 * 
 */

abstract class Cuenta {

    var $numCuenta;
    var $duenio;
    var $saldo;
    /*static $coleccionCuentas = [
        [
            'numero_cliente' => 123,
            'cuenta' => 1212,
            'saldo' => 1000,
        ],
        [
            'numero_cliente' => 456,
            'cuenta' => 3434,
            'saldo' => 500,
        ],
        [
            'numero_cliente' => 789,
            'cuenta' => 5656,
            'saldo' => 300,
        ]
    ];
     * 
     */

    function __construct(int $numCta, \app\clases\Cliente $duenio, int $saldo) {
        $this->numCuenta=$numCta;
        $this->duenio=$duenio;
        $this->saldo=$saldo;
    }
public function saldo() {
        return $this->saldo;
    }
    
}

class CtaCorriente extends Cuenta{
    protected $giro;
    
    public function __construct(int $numCta, \app\clases\Cliente $duenio, int $saldo, int $giro) {
        parent::__construct($numCta,$duenio,$saldo);
        $this->giro=$giro;
    }
    
    public function saldo() {
        return parent::saldo();
    }
    
    
}

class CajaAhorro extends Cuenta{
    
    public function __construct(int $numCta, \app\clases\Cliente $duenio, int $saldo) {
        parent::__construct($numCta,$duenio,$saldo);
    }
    
    public function saldo() {
        return parent::saldo();
    }
}

