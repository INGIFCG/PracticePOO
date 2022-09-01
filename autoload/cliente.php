<?php
/* require_once("Class_operacion.php"); *///se incluye para que erede las propiedades y metodos
require_once("upload.php");
class cliente extends persona
{
    protected $fltcredito;

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

}//end class empleado
?>