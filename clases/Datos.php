<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\clases;

class Datos {
    protected $cliente1;
    
    public function __construct() {
    }


    public function Crear($_GET) {
        if(!empty($_GET['dni']) && !empty($_GET['apellido'])&& !empty($_GET['nombre'])&& !empty($_GET['numero_cliente'])){
                $cliente1=new \app\clases\Cliente($_GET['dni'], $_GET['apellido'], $_GET['nombre'], $_GET['numero_cliente']);
                
                }
    }
    //put your code here
    
     
                
}
