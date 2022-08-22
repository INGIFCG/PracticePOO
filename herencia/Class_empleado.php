<?php

require_once("Class_operacion.php");//se incluye para que erede las propiedades y metodos

class empleado extends persona
{
    protected $Strpuesto;

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

    } //end getpuesto

}//end class empleado
