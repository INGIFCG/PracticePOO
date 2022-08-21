<?php

 require_once("Class_operacion.php");


$datospersona= new persona("carlos","gonzalez","carlosgonzalez@gmai.com","123456456","urb simon","04242245154");

$DatosGNRL= $datospersona->getData();

echo $DatosGNRL;





/* $obtener= new usuario("carlos" ,"gonzalez", "carlosgonzalez@gmail.com");

$nombre=$obtener->getPassword();


echo $nombre;
 */

/*  $operacion1= new operacion(5,5);

 $totalsuma= $operacion1->getsuma();
 $totalresta= $operacion1->getresta();
 $totalmulti= $operacion1->getmulti();
 $totaldivi= $operacion1->getdiv();
  
 echo "<h2>el total de la operacion es:".$totalsuma."<h2>";
 echo "<h2>el total de la operacion es:".$totalresta."<h2>";
 echo "<h2>el total de la operacion es:".$totalmulti."<h2>";
 echo "<h2>el total de la operacion es:".$totaldivi."<h2>";
 */

?>