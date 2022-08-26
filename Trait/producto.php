<?php
trait producto{

    public $strProducto;
    public $fltPrecio;
    public $inStock;
    

    public function setProducto( string $producto, float $precio, int $stock){
        $this-> strProducto= $producto;
        $this-> fltPrecio = $precio;
        $this-> intStock= $stock;
        
    }
    public function getProducto():string{

        $alldata= "{
            Producto:{$this->strProducto}<br>
            Precio: {$this->fltPrecio}<br>
            Stock:  {$this->intStock}<br>
        }";
        return $alldata;
    }
    public function setStock(int $cantidad){
        $this->intStock= $this->intStock - $cantidad;
    }
} //end trait producto
?>