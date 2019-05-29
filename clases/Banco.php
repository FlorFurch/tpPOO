<?php

namespace app\clases;

include ("Cuenta.php");
("Persona.php");

class Banco {

    protected $coleccionCuentas;
    protected $coleccionCtaCorriente;
    protected $coleccionCajaAhorro;
    static $coleccionClientes = [
        [
            'numero_cliente' => 123,
            'dni' => 66863,
            'apellido' => 'Apellido 1',
            'nombre' => 'Nombre 1',
        ],
        [
            'numero_cliente' => 456,
            'dni' => 86754,
            'apellido' => 'Apellido 2',
            'nombre' => 'Nombre 2',
        ],
        [
            'numero_cliente' => 789,
            'dni' => 82686,
            'apellido' => 'Apellido 3',
            'nombre' => 'Nombre 3',
        ]
    ];

    function __construct() {
        $this->coleccionCuentas = [];
        $this->coleccionCtaCorriente = [];
        $this->coleccionCajaAhorro = [];
       // $this->coleccionClientes = [];
    }

    function incorporarCliente(Cliente $cliente) {
        self::$coleccionClientes[] = $cliente;
    }

    function MostrarClientes(): array {
        return self::$coleccionClientes;
    }

    function incorporarCuenta(Cuenta $cuenta, int $numCliente) {
        foreach (self::$coleccionClientes as $cliente) {
            if ($cliente->numCliente == $numCliente) {
                $this->coleccionCuentas[] = $cuenta;
            } else
                return 'No existe el cliente';
        }
    }

    function incorporarCtaCorriente() {
        foreach ($this->coleccionCuentas as $cuenta) {
            if ($cuenta instanceof CtaCorriente) {
                
            }
            $this->coleccionCtaCorriente[] = $cuenta;
        }
    }
    
    public function buscarClientePorNumero($numeroBuscado){
        foreach(self::$coleccionClientes as $clienteActual){
            if($clienteActual['numero_cliente']==$numeroBuscado){
                $instanciaCliente = new Cliente($clienteActual['dni'], $clienteActual['apellido'], $clienteActual['nombre'], $clienteActual['numero_cliente']);
                return $instanciaCliente;
            }
        }
        return null;
    }

    function incorporarCajaAhorro() {
        foreach ($this->coleccionCuentas as $cuenta) {
            if ($cuenta instanceof CajaAhorro) {
                
            }
            $this->coleccionCajaAhorro[] = $cuenta;
        }
    }

    public function RealizarDeposito(int $numCta, int $monto) {
        foreach ($this->coleccionCuentas as $cuenta) {
            if ($cuenta->numCuenta == $numCta) {
                $cuenta->saldo = $cuenta->saldo + $monto;
                return $cuenta->saldo;
            }
        }
    }

    function realizarRetiro(int $numCta, int $monto) {
        foreach ($this->coleccionCuentas as $cuenta) {
            if ($cuenta instanceof CtaCorriente) {
                if ($monto <= ($cuenta->saldo + $cuenta->saldo)) {
                    $cuenta->saldo = $cuenta->saldo - $monto;
                    return $cuenta->saldo;
                } else {
                    return "Saldo insuficiente";
                }
            } elseif ($cuenta instanceof CajaAhorro) {

                if ($monto <= $cuenta->saldo) {
                    $cuenta->saldo = $cuenta->saldo - $monto;
                    return $cuenta->saldo;
                } else {
                    echo 'Saldo insuficiente';
                }
            }
        }
    }

    public function Nuevo() {
        if (!empty($_GET['dni']) && !empty($_GET['apellido']) && !empty($_GET['nombre']) && !empty($_GET['numero_cliente'])) {
            $nuevoCliente = new \app\clases\Cliente($_GET['dni'], $_GET['apellido'], $_GET['nombre'], $_GET['numero_cliente']);
            require_once 'clienteCreado.php';
        }
    }

}
