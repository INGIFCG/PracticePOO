<?php

require_once("producto.php");
require_once("Carrito.php");


class tienda{
    use  producto,carrito;

    public $fltTotal = 0;

    public function getCarrito(){

        $this->fltTotal = $this->fltPrecio * $this->intCantidad;
        $factura= "
        Producto:{$this->strProducto}<br>
        Precio: {$this->fltPrecio}<br>
        Stock:  {$this->intStock}<br>
        Total: {$this->fltTotal}   
        ";
        
        return $factura;
    }    
}
