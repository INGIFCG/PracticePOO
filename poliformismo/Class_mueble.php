<?php

require_once('Class_producto.php');

class Mueble extends Producto
{

    public $strcolor;
    public $strmaterial;
    protected $disponibilidad = "Agotado";


    public function __construct($descripcion, $fltPrecio, $marca, $color, $material)
    {

        parent::__construct($descripcion, $fltPrecio);

        $this->strcolor = $color;
        $this->strmaterial = $material;
    }
    public function getInfoProducto() //redefinicion de metodos
    {
        $arrProducto = array(
            'Producto' => $this->strDescripcion,
            'Precio' => $this->fltPrecio,
            'Disponibilidad' => $this->stockMinimo,
            'Exitencia' => $this->disponibilidad,
            'Color' => $this->strcolor,
            'material' => $this->strmaterial
        );
        return $arrProducto;
    }
}// End class mueble
