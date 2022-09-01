<?php

namespace controllers;
/* require_once("../models/persona.php");//se incluye para que erede las propiedades y metodos */
require_once("../autoload.php");
use models\persona;

class empleado extends persona
{
    protected $strpuesto;

    function __construct($nombr, $apelli, $email, $password, $direction, $phoneN)
    {
        parent::__construct($nombr, $apelli, $email, $password, $direction, $phoneN);
    }

    public function setPuesto($puesto)//setters
    {
        $this-> strpuesto=$puesto;

    } //end setpuesto
    
    public function getPuesto():string// geters
    {
        return $this->strpuesto;

    } //end getpuestoz

/*     public function getMensaje($str):string
    { 
        $str= "Bienvenido Empleado ".get_parent_class($this->nombr);
        return $str;
    }  */

}//end class empleado
