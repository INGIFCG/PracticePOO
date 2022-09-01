<?php

namespace controllers;  
/* require_once("../models/persona.php");//se incluye para que erede las propiedades y metodos */
require_once("../autoload.php");
use models\persona;

class cliente extends persona
{
    protected $fltcredito;
    protected $nombreHijo;
    protected $mensaje;

    function __construct($nombr, $apelli, $email, $password, $direction, $phoneN)
    {
        parent::__construct($nombr, $apelli, $email, $password, $direction, $phoneN);
    }

    public function setCredito($credito)//setters
    {
        $this->  fltcredito=$credito;

    } //end setpuesto
    
    public function getCredito():float// geters
    {
        return $this->fltcredito;

    } //end getpuesto
    public function getMensaje($str)//setters
    {
        $nombreHijos=get_parent_class($this->nombre);

        $mensaje= $str." ".$nombreHijos;
        
        return $mensaje;
    } 


}//end class empleado
?>