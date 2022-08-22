<?php
require_once('Class_producto.php');
require_once('Class_mueble.php');
require_once('Class_mesa.php');


//visualizacion de clase producto
$objcama = new Producto("cama",420.60);

$informacionPrdcto= $objcama->getInfoProducto();
print_r ('<pre>');
print_r($informacionPrdcto);
print_r ('</pre>');


//clase mueble

$objEdredon = new Mueble('edredon',540.50,"Maderita","Marron","Madera");

$InfoEdredon= $objEdredon->getInfoProducto();
print_r ('<pre>');
print_r($InfoEdredon);
print_r ('</pre>');

//clase mesan

$objMesa = new Mesa('edredon',700.50,"Maderita","Marron","Madera","Grande");
$objMesa->setforma("Corazon");

$InfoMesa= $objMesa->getInfoProducto();
print_r ('<pre>');
print_r($InfoMesa);
print_r ('</pre>');
