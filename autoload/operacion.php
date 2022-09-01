<?php
require_once("upload.php");

class operacion
{

    //propiedades de la clase
    public $cantidad1 = 0;
    public $cantidad2 = 0;
    public $resultado = 0;

    //constructor
    function __construct($intCant1, $intCant2)
    {

        $this->cantidad1 = $intCant1;
        $this->cantidad2 = $intCant2;
    }
    //del constructor nacen los metodos de los cuales se procesara la informacion
    public function getsuma() // geters
    {

        $this->resultado = $this->cantidad1 + $this->cantidad2;
        return $this->resultado;
    }

    public function getresta()
    {
        $this->resultado = $this->cantidad1 - $this->cantidad2;
        return $this->resultado;
    }

    public function getmulti()
    {
        $this->resultado = $this->cantidad1 * $this->cantidad2;
        return $this->resultado;
    }

    public function getdiv()
    {
        $this->resultado = $this->cantidad1 / $this->cantidad2;
        return $this->resultado;
    }
}
?>