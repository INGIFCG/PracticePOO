<?php

require_once("producto.php");
require_once("Carrito.php");


class Tienda{
    use  productos,carrito;

    public $fltTotal = 0;

    public function getCarrito(){

        $this->fltTotal = $this->fltPrecio * $this->intCantidad;
        $factura= "
        Producto:{$this->strProducto}<br>
        Precio: {$this->fltPrecio}<br>
        Stock:  {$this->inStock}<br>
        Total: {$this->fltTotal}   
        ";
        
        return $factura;
    }    
}
