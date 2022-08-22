<?php

require_once('Class_mueble.php');
//colocando la palabra final se le indica al programa que esta clase no prodra ser heredada por otra clase distinda a esta
final class Mesa extends Mueble
{

    private $strforma = "";
    protected $strtamaño;
    protected $disponibilidad = "Disponible";


    public function __construct($descripcion, $fltPrecio, $marca, $color, $material,$tamaño)
    {

        parent::__construct($descripcion,$fltPrecio, $marca, $color, $material); 
        $this->strtamaño = $tamaño;
    }

    public function setforma($forma){
        
        $this->strforma= $forma;

    }
    public function getInfoProducto() //redefinicion de metodos
    {
        $arrProducto = array(
            'Producto' => $this->strDescripcion,
            'Precio' => $this->fltPrecio,
            'Disponibilidad' => $this->stockMinimo,
            'Exitencia' => $this->disponibilidad,
            'Color' => $this->strcolor,
            'Material' => $this->strmaterial,
            'Forma' => $this->strforma,
            'Tamaño'=> $this->strtamaño
        );
        return $arrProducto;
    }
}// End class mueble
