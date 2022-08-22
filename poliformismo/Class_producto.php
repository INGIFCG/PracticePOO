<?php

class Producto
{

    public $strDescripcion;
    public $fltPrecio;
    protected $stockMinimo = 10;
    protected $disponibilidad = "Disponible";

    public function __construct($descripcion, $fltPrecio)
    {

        $this->strDescripcion = $descripcion;
        $this->fltPrecio = $fltPrecio;
    }

    public function getInfoProducto()
    {

        $arrProducto = array(
            'Producto' => $this->strDescripcion,
            'Precio' => $this->fltPrecio,
            'Disponibilidad' => $this->stockMinimo,
            'exitencia' => $this->disponibilidad
        ); 
        return $arrProducto;
    }
}//end class producto
