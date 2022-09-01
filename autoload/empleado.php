<?php
/* 
require_once("Class_operacion.php"); *///se incluye para que erede las propiedades y metodos
require_once("upload.php");
class empleado extends persona
{
    protected $strpuesto;
    protected $mensaje;


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

/*     public function getMensaje($str)//setters
    {
        $this-> mensaje= $str." ".$this->nombr;
        
        return $this->mensaje;
    } 
     */

}//end class empleado
