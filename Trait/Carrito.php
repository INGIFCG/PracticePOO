<?php

trait carrito{
    public $strProducto;
    public $intCantidad;

    public function setcarrito(string $producto, int $cantidad){

        $this->strProducto = $producto;
        $this->intCantidad= $cantidad;
        
    }

    abstract function getCarrito();
}
