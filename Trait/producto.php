<?php
trait productos{

    public $strProducto;
    public $fltPrecio;
    public $inStock;
    

    public function setProducto( string $producto, float $precio, int $stock){
        $this-> strProducto= $producto;
        $this-> fltPrecio = $precio;
        $this-> inStock= $stock;
        
    }
    public function getProducto():string{

        $alldata= "{
            Producto:{$this->strProducto}<br>
            Precio: {$this->fltPrecio}<br>
            Stock:  {$this->inStock}<br>
        }";
        return $alldata;
    }
    public function setStock(int $cantidad){
        $this->inStock= $this->inStock - $cantidad;
    }
} //end trait producto
?>