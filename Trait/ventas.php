<?php

require_once("ClassTienda.php");
require_once("Carrito.php");

$obj1= new tienda();

$obj1->setProducto("PC",500,20);

echo $obj1->getProducto();

echo "<hr><h1>Actualizacion</h1><br>";

$obj1->setStock(4);

echo $obj1->getProducto();

echo "<hr><h1>CARRITO</h1><br>";
$obj1-> setcarrito("PS5",10);



echo $obj1->getCarrito(); 

?>